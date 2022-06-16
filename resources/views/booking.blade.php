@extends('layouts.master')

@section('content')
    <!--DASHBOARD SECTION-->
        <div class="inn-body-section">
            <div class="container">
                <div class="row">
                    <div class="page-head">
						<h2>Booking Hotel Room</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
                    <div class="db-profile-edit">
                        <form class="col s12" action="{{ route('reservation') }}" method="POST">
                            @csrf

                            <div class="row">
								<div class="col s12">
                                    <label class="col s4" for="guest_name">Full Name</label>
                                    <input type="text" class="validate" id="guest_name" name="guest_name" required>
								</div>
							</div>
                            <div class="row">
								<div class="col s12">
                                    <label class="col s4" for="email">Email Address</label>
                                    <input type="email" class="validate" id="email" name="email" required>
								</div>
							</div>
                            <div class="row">
								<div class="col s12">
                                    <label class="col s4" for="phone">Phone Number</label>
                                    <input type="number" class="validate" id="phone" name="phone" required>
								</div>
							</div>
                            <div class="row">
                                <div class="col s12">
                                    <label class="col s4" for="room_id">Type Room</label>
                                </div>
								<div class="col s12">
                                    <select id="room_id" name="room_id" >
                                        <option value="" disabled selected></option>
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}">{{ $room->room_type }}</option>
                                        @endforeach
                                    </select>
								</div>
							</div>
                            <div class="row">
								<div class="col s12">
                                    <label class="col s4" for="check_in">Check In</label>
                                    <input type="datetime-local" id="check_in" name="check_in" required class="validate">
								</div>
							</div>
                            <div class="row">
								<div class="col s12">
                                    <label class="col s4" for="check_out">Check Out</label>
                                    <input type="datetime-local" id="check_out" name="check_out" required class="validate">
								</div>
							</div>
                            <div>
                                <div class="col">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
			    </div>
		    </div>
        </div>
		<!--END DASHBOARD SECTION-->
@endsection