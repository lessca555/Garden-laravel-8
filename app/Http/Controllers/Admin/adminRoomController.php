<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\roomFacility;
use Illuminate\Support\Facades\Storage;

class adminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::latest()->paginate(5);

        return view('admin.rooms.index', compact('rooms'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = roomFacility::all();

        return view('admin.rooms.create', compact('facilities'));
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
            'room_type' => 'required|max:255',
            'number_of_rooms' => 'required|numeric',
            'facility_id' => 'required',
            'description' => 'required|max:350',
            'image' => 'image|file|max:10240',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['image'] = $request->file('image')->store('images/room');

        Room::create($validatedData);

        return redirect()->route('rooms.index')->with('add success', 'New room has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('admin.rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $facilities = roomFacility::all();

        return view('admin.rooms.edit', compact('room', 'facilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $rules = [
            'room_type' => 'required|max:255',
            'number_of_rooms' => 'required|numeric',
            'facility_id' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:10240',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($room->image) {
                Storage::delete($room->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('images/room');
        }

        Room::where('id', $room->id)->update($validatedData);

        return redirect()->route('rooms.index')->with('edit success', 'Room has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if ($room->image) {
            Storage::delete($room->image);
        }

        Room::destroy($room->id);

        return redirect()->route('rooms.index')->with('delete success', 'Room has been removed');
    }
}
