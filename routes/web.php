<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Admin\adminDashboardController;
use App\Http\Controllers\Admin\adminRoomFacilityController;
use App\Http\Controllers\Admin\adminHotelFacilityController;
use App\Http\Controllers\Admin\adminRoomController;
use App\Http\Controllers\Admin\adminAccountController;
use App\Http\Controllers\Admin\receptionistAccountController;
use App\Http\Controllers\Admin\guestAccountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\HomeFacilityController;
use App\Http\Controllers\Receptionist\receptionistDashboardController;
use App\Http\Controllers\Receptionist\receptionistReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/all-rooms', [RoomController::class, 'index']);

Auth::routes();

// ===== User =====

// User Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// User Booking
Route::middleware('role:user')->get('booking', [BookingController::class, 'index'])->name('booking');
Route::middleware('role:user')->post('booking', [BookingController::class, 'store'])->name('reservation');
// User Account
Route::middleware('role:user')->get('/my-account', function () {
    return view('my-account');
});
// Print
Route::middleware('role:user')->get('/print/{reservation:id}', [PrintController::class, 'print'])->name('print');
// User Hotel Facilities
Route::get('/hotel-facilities', [App\Http\Controllers\HotelFacilityController::class, 'index'])->name('hotel-facilities');


// ===== Admin =====

// Admin Dashboard
Route::middleware('role:admin')->get('/admin', function () {
    return redirect('/admin/dashboard');
});
Route::middleware('role:admin')->get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('adminDashboard');
// Admin Room Facilities
Route::middleware('role:admin')->resource('admin/roomFacilities', adminRoomFacilityController::class);
// Admin Hotel Facilities
Route::middleware('role:admin')->resource('admin/hotelFacilities', adminHotelFacilityController::class);
// Admin Rooms
Route::middleware('role:admin')->resource('admin/rooms', adminRoomController::class);
// Admin Accounts
Route::middleware('role:admin')->resource('admin/adminAccounts', adminAccountController::class);
// Admin Receptionist Accounts
Route::middleware('role:admin')->resource('admin/receptionistAccounts', receptionistAccountController::class);
// Admin Receptionist Accounts
Route::middleware('role:admin')->resource('admin/guestAccounts', guestAccountController::class);


// ===== Receptionist =====

// Receptionist Dashboard
Route::middleware('role:receptionist')->get('/receptionist/dashboard', [receptionistDashboardController::class, 'index'])->name('receptionistDashboard');
// Receptionist Reservation
Route::middleware('role:receptionist')->resource('receptionist/reservations', receptionistReservationController::class);

Route::middleware('auth')->group(function () {
    Route::middleware('role:user')->get('booking', [BookingController::class, 'index'])->name('booking');
    Route::middleware('role:user')->post('booking', [BookingController::class, 'store'])->name('reservation');
});
