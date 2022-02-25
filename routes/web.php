<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->get('/dashboard', function() {
    return 'Dashboard';
})->name('dashboard');
Route::middleware('role:receptionist')->get('/beranda', function() {
    return 'Beranda';
})->name('beranda');

Route::get('/all-rooms', function () {
    return view('all-rooms');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/my-profile', function () {
    return view('my-profile');
});
Route::get('/room-details', function () {
    return view('room-details');
});