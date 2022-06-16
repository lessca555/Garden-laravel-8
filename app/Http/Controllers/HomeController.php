<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\hotelFacility;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guestRooms = Room::take(4)->get();
        $hotelFacilities = hotelFacility::take(8)->get();
        return view('home', compact('guestRooms', 'hotelFacilities'));
    }
}
