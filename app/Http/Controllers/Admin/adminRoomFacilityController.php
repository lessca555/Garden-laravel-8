<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roomFacility;

class adminRoomFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_facilities = roomFacility::latest()->paginate(5);

        return view('admin.roomFacilities.index', compact('room_facilities'))
                ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomFacilities.create');
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
            'facility_name' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        roomFacility::create($validatedData);

        return redirect()->route('roomFacilities.index')->with('add success', 'New room facility has been added');
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
     * @param  \App\Models\roomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function edit(roomFacility $roomFacility)
    {
        return view('admin.roomFacilities.edit', compact('roomFacility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roomFacility $room_facility, $id)
    {
        $rules = [
            'facility_name' => ['required', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        $room_facilities = roomFacility::where('id', $id)->update($validatedData);


        return redirect()->route('roomFacilities.index')->with('edit success', 'Room facility has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(roomFacility $room_facility, $id)
    {
        $room_facilities = roomFacility::where('id', $id)->delete();

        return redirect()->route('roomFacilities.index')->with('delete success', 'Room facility has been removed');
    }
}
