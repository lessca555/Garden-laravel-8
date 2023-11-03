<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('booking', compact('rooms'));
    }

    public function store(Request $request)
    {
        $bookingRules = [
            'guest_name' => 'required',
            'email' => 'required|email:dns',
            'phone' => 'required|numeric',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ];


        $validateBooking = $request->validate($bookingRules);

        $validateBooking['user_id'] = auth()->user()->id;
        $validateBooking['status'] = 'booking';

        Booking::create($validateBooking);

        return redirect('/home')->with('success', 'Reservation success');
    }
}
