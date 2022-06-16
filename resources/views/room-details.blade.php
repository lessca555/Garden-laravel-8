@extends('layouts.master')

@section('content')
    <div class="inn-body-section inn-detail">
			<div class="container">
				<div class="row">
					@foreach ($rooms as $room)
					<div class="inn-bod">
						<div class="inn-detail-p1 inn-com">
							<h2>{{ $room->room_type }} Room</h2>
							<p>{{ $room->description }}</p>
						</div>
						<div class="inn-detail-p1 inn-com inn-com-list-point">
							<div class="detail-title">
								<h2>Room Facilities</h2>
								<p>{{ $room->facility->facility_name }}</p>
							</div>
						</div>
						<div class="inn-detail-p1 inn-com inn-com-form">
							<div class="detail-title">
								<h2>Book This Room</h2>
								<p>a procedure intended to establish the quality, performance, or reliability of something, especially before it is taken into widespread use.</p>
							</div>
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>First Name</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Last Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Phone</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Check In</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Check Out</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Adults</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Childrens</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea1" class="materialize-textarea"></textarea>
										<label for="textarea1">Textarea</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" value="submit" class="waves-effect waves-light full-btn"> </div>
								</div>
							</form>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
@endsection