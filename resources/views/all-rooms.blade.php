@extends('layouts.master')

@section('content')
    <!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>All Room Types</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a> </li>
								<li><a href="#">Rooms</a> </li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-70">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Room Types</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--ROOM SECTION-->
                    @foreach ($rooms as $room)
					<div class="room room-1">
						<div class="ribbon ribbon-top-left"><span>Featured</span> </div>
						<!--ROOM IMAGE-->
						<div class="r1 r-com r-com-1 r1-1"><img src="{{ asset('assets/images/room/' . $room->image) }}" alt="" height="300px" /> </div>
						<!--ROOM RATING-->
						<div class="r2 r-com r-com-1">
							<h3>{{ $room->room_type }}</h3>
							<h4>Review</h4>
							<div class="r2-ratt"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/h-trip.png" alt="" /> <span>Excellent  4.5 / 5</span> </div>
							<ul>
								<li>Max Adult : 3</li>
								<li>Max Child : 1</li>
								<li></li>
								<li></li>
							</ul>
							<div class="r2-available r2-available-1">Available</div>
						</div>
						<!--ROOM AMINITIES-->
						<div class="r3 r-com r-com-1">
							<h4>Aminities</h4>
							<ul>
								<li>Ironing facilities</li>
								<li>Tea/Coffee maker</li>
								<li>Air conditioning</li>
								<li>Flat-screen TV</li>
								<li>Wake-up service</li>
							</ul>
						</div>
						<!--ROOM PRICE-->
						<div class="r4 r-com r-com-1">
							<h4>Price</h4>
							<p>Price for 1 night</p>
							<p><span class="room-price-1">250.000</span> <span class="room-price">370.000</span> </p>
							<p>Non Refundable</p>
						</div>
						<!--ROOM BOOKING BUTTON-->
						<div class="r5 r-com r-com-1 r5-1">
							<p>Price for 1 night</p> <a href="{{ route('booking') }}" class="inn-room-book">Book</a> </div>
					</div>
                    @endforeach

					<!--END ROOM SECTION-->

				</div>
			</div>
		</div>
		<!--TOP SECTION-->
@endsection
