@extends('layouts.master')

@section('content')
    <!--TOP SECTION-->
		<div class="inn-body-section pad-bot-50">
			<div class="container">
				<div class="row inn-page-com">
					<div class="page-head">
						<h2>Hotel Facilities</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
					<!--SERVICES SECTION-->
					@foreach ($hotelFacilities as $hotelFacility)
					<div class="col-md-12">
						<div class="row inn-services in-blog">
							<div class="col-md-4"> <img src="{{ asset('storage/' . $hotelFacility->image) }}" alt="" /> </div>
							<div class="col-md-8">
								<h3>{{ $hotelFacility->facility_name }}</h3>
								<p>{{ $hotelFacility->description }}</p> </div>
						</div>
					</div>
					@endforeach
					<!--END SERVICES SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
@endsection