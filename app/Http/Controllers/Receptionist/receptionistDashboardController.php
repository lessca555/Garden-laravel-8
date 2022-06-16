<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class receptionistDashboardController extends Controller
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
        $reservation = DB::table('bookings')->count();
        $booking = DB::table('bookings')->where('status', 'booking')->count();
        $check_in = DB::table('bookings')->where('status', 'check_in')->count();
        $check_out = DB::table('bookings')->where('status', 'check_out')->count();

        return view('receptionist.dashboard', compact('reservation', 'booking', 'check_in', 'check_out'));
    }
}
