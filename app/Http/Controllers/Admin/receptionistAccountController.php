<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class receptionistAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptionists = User::where('role', 'receptionist')->latest()->paginate(5);

        return view('admin.receptionistAccounts.index', compact('receptionists'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.receptionistAccounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string'],
        ];

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        $user->assignRole('receptionist');

        return redirect()->route('receptionistAccounts.index')->with('add success', 'New Receptionist has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receptionist = User::findOrFail($id);
        return view('admin.receptionistAccounts.edit', compact('receptionist', 'receptionist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];

        if ($request->email != $user->email) {
            $rules['email'] = ['required', 'string', 'email', 'max:255'];
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::where('id', $id)->update($validatedData);

        return redirect()->route('receptionistAccounts.index')->with('edit success', 'Receptionist has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        $user = User::where('id', $id)->delete();

        return redirect()->route('receptionistAccounts.index')->with('delete success', 'Receptionist has been removed');
    }
}
