@extends('layouts.master')

@section('content')
<!--Check Availability SECTION-->
		<div>
			<div class="slider fullscreen">
				<ul class="slides">
					<li> <img src="assets/images/slider/1.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h2>Hotel Hebat</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, reiciendis unde omnis, dolores consequatur cumque nemo autem earum fugit dolorem, exercitationem dignissimos in! Voluptate doloribus exercitationem veniam vero voluptatum ipsa.</p>
                        </div>
					</li>
					<li> <img src="assets/images/slider/2.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h2>Hotel Hebat</h2>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur rem eveniet dicta aut doloribus temporibus minima dolore nesciunt porro fugiat, quis excepturi vitae at velit odit delectus laborum praesentium id?</p>
                        </div>
					</li>
					<li> <img src="assets/images/slider/3.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h2>Hotel Hebat</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aut eos autem hic quaerat itaque dignissimos natus consequatur ullam omnis repudiandae voluptatem atque nobis dolorem doloribus. Laudantium numquam nam vero!</p>
                        </div>
					</li>
					<li> <img src="assets/images/slider/4.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h2>Hotel Hebat</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptas numquam ratione modi eveniet commodi sint beatae ipsam iste! Quam quibusdam vero minima hic temporibus expedita architecto voluptate, quidem qui.</p>
                        </div>
					</li>
				</ul>
			</div>
		</div>
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		<div class="inn-body-section pad-bot-70">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Hotel Rooms</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
					<!--ROOM SECTION-->
					@foreach ($guestRooms as $guestRoom)
					<div class="room room-1">
						<!--ROOM IMAGE-->
						<div class="r1 r-com r-com-1 r1-1"><img src="{{ asset('storage/' . $guestRoom->image) }}" alt="" /> </div>
						<!--ROOM DESCRIPTION-->
						<div class="r2 r-com r-com-1">
							<h3>{{ $guestRoom->room_type }} Room</h3>
							<h4>Description</h4>
							<p>{{ $guestRoom->description }}</p>
						</div>
						<!--ROOM FASILITY-->
						<div class="r2 r-com r-com-1">
							<h4>Facility</h4>
							<P>{{ $guestRoom->facility->facility_name }}</P>
						</div>
						<!--ROOM BOOKING BUTTON-->
						<div class="r5 r-com r-com-1 r5-1">
							<a href="/booking" class="inn-room-book">Book</a>
						</div>
					</div>
					<!--END ROOM SECTION-->
					@endforeach
				</div>
			</div>
		</div>
		<!--END HOTEL ROOMS-->
		<!--TOP SECTION-->
		<div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Hotel Facilities</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div>
						@foreach ($hotelFacilities as $hotelFacility)
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect">
								<img src="{{ asset('storage/' . $hotelFacility->image) }}" alt="">
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> 
								<a href="#!"><h4>{{ $hotelFacility->facility_name }}</h4></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Photo Gallery</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/1.jpg" alt="" /> </div>
					</div>
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/2.jpg" alt="" /> </div>
					</div>
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/3.jpg" alt="" /> </div>
					</div>
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/4.jpg" alt="" /> </div>
					</div>
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/5.jpg" alt="" /> </div>
					</div>
					<div class="col-md-4">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="assets/images/gallery/6.jpg" alt="" /> </div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
@endsection