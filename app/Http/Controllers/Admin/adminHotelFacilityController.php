<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hotelFacility;

class adminHotelFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel_facilities = hotelFacility::latest()->paginate(5);

        return view('admin.hotelFacilities.index', compact('hotel_facilities'))
                ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotelFacilities.create');
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
            'description' => 'required|max:350',
            'image' => 'image|file|max:10240',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['image'] = $request->file('image')->store('images/hotelFacility');

        hotelFacility::create($validatedData);

        return redirect()->route('hotelFacilities.index')->with('add success', 'New hotel facility has been added');
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
    public function edit(hotelFacility $hotelFacility)
    {
        return view('admin.hotelFacilities.edit', compact('hotelFacility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotelFacility $hotel_facility, $id)
    {
        $rules = [
            'facility_name' => ['required', 'max:255'],
            'description' => 'required',
            'image' => 'image|file|max:10240',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($hotelFacility->image) {
                Storage::delete($hotelFacility->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('images/hotelFacility');
        }

        $hotel_facilities = hotelFacility::where('id', $id)->update($validatedData);


        return redirect()->route('hotelFacilities.index')->with('edit success', 'Hotel facility has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotelFacility $hotel_facility, $id)
    {
        $hotel_facilities = hotelFacility::where('id', $id)->delete();

        return redirect()->route('hotelFacilities.index')->with('delete success', 'Hotel facility has been removed');
    }
}
