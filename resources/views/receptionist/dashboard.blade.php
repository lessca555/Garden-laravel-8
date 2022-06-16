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
                  <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reservation</h4>
                  </div>
                  <div class="card-body">
                    {{ $reservation }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-bookmark"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Booking</h4>
                  </div>
                  <div class="card-body">
                    {{ $booking }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-door-closed"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Check In</h4>
                  </div>
                  <div class="card-body">
                    {{ $check_in }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-door-open"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Check Out</h4>
                  </div>
                  <div class="card-body">
                    {{ $check_out }}
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection