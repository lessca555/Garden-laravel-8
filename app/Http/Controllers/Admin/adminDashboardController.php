<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $room_facilities = DB::table('room_facilities')->count();
        $hotel_facilities = DB::table('hotel_facilities')->count();
        $rooms = DB::table('rooms')->count();
        $users = DB::table('users')->count();

        return view('admin.dashboard', compact('room_facilities', 'hotel_facilities', 'rooms', 'users'));
    }
}
