@extends('layouts.app')

@section('title', 'Room Details')

@section('content')
        <div class="section-header">
            <h1>Room Details</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/rooms">Rooms</a></div>
                <div class="breadcrumb-item active">Room Details</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
              <div class="card-body">
                <a href="{{ route('rooms.index') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
              </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $room->room_type }} Room</h4>
                        </div>
                        <div class="card-body">
                            <div class="chocolat-parent">
                                <a href="{{ asset('storage/' . $room->image) }}" class="chocolat-image">
                                    <div data-crop-image="285">
                                        <img alt="image" src="{{ asset('storage/' . $room->image) }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="section-title">Description</div>
                            <p>{{ $room->description }}</p>
                            <div class="section-title">Facility</div>
                            <p>{{ $room->facility->facility_name }}</p>
                            <div class="section-title">Number of Room</div>
                            <p>{{ $room->number_of_rooms }} room</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection