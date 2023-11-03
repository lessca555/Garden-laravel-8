@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-hotel"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rooms</h4>
                  </div>
                  <div class="card-body">
                    {{ $rooms }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-shower"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Room Facilities</h4>
                  </div>
                  <div class="card-body">
                    {{ $room_facilities }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-dumbbell"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Hotel Facilities</h4>
                  </div>
                  <div class="card-body">
                    {{ $hotel_facilities }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                    {{ $users }}
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
