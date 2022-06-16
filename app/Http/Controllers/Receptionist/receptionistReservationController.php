<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;
use DataTables;

class receptionistReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     $data = Booking::latest()->get();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        $reservations = Booking::get();
        // $reservations = DataTables::of($data)->make(true);

        return view('receptionist.reservations.index', compact('reservations'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Booking $reservation)
    {
        $reservations = Booking::all();

        return view('receptionist.reservations.edit', compact('reservation', 'reservations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $reservation)
    {
        $rules = ['status' => 'required'];

        $validatedData = $request->validate($rules);

        Booking::where('id', $reservation->id)->update($validatedData);

        return redirect()->route('reservations.index')->with('edit success', 'Status has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
