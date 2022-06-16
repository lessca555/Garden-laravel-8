@extends('layouts.app')

@section('title', 'Edit')

@section('content')

        <div class="section-header">
            <h1>Edit Rooms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/rooms">Rooms</a></div>
                <div class="breadcrumb-item active">Edit Rooms</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="card-body">
                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('PUT')

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="facility_id" class="form-label">Status</label>
                                    <select class="form-control" name="status" id="status" required>
                                        @switch($reservation->status)
                                            @case('check_in')
                                                <option value="check_in" selected>Check In</option>
                                                <option value="check_out">Check Out</option> 
                                                <option value="booking">Booking</option>
                                                @break
                                            @case('check_out')
                                                <option value="check_out" selected>Check Out</option> 
                                                <option value="check_in">Check In</option>
                                                <option value="booking">Booking</option>
                                                @break
                                            @default
                                                <option value="booking" selected>Booking</option>
                                                <option value="check_in">Check In</option> 
                                                <option value="check_out">Check Out</option> 
                                        @endswitch   
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

@endsection