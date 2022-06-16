@extends('layouts.master')

@section('content')
    <!--DASHBOARD SECTION-->
        <div class="inn-body-section">
            <div class="container">
                <div class="row">
                    <div class="page-head">
						<h2>My Profile</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
                    <div class="db-profile">
                        <img src="assets/images/user.jpg" alt="">
					    <h4>{{ Auth::user()->name }}</h4>
                        <p>{{ Auth::user()->email }}</p>
				    </div>
                    <div class="db-profile-view">
                        <table style="width: 300px;" align="center">
                            <thead>
                                <tr>
                                    <th>Join Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Auth::user()->created_at->translatedFormat('j F Y') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="page-head">
						<h2>Booking History</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
                    <div class="db-cent-table db-com-table">
                        <table class="bordered responsive-table" style="width: 700px;" align="center">
							<thead>
								<tr>
									<th>Booking ID</th>
									<th>Type Room</th>
									<th>Date</th>
                                    <th>Print</th>
								</tr>
							</thead align="center">
                            @if(count(auth()->user()->bookings)>0)
                                @foreach (auth()->user()->bookings as $reservation)
                                    <tbody>
                                        <tr>
                                            <td>{{ $reservation->id }}</td>
                                            <td>{{ $reservation->room->room_type }} Room</td>
                                            <td>{{ $reservation->created_at->translatedFormat('j F Y') }}</td>
                                            <td><a class="db-not-success" href="{{ route('print', $reservation->id) }}">Print</a></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @else
                                <tr><td colspan="4" style="text-align: center;">No Record(s) Found!</td></tr>
                            @endif
					</table>
                    </div>
			    </div>
		    </div>
        </div>
		<!--END DASHBOARD SECTION-->
@endsection