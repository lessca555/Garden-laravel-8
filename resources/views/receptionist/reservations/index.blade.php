@extends('layouts.app')

@section('title', 'Reservations')

@section('content')
        <div class="section-header">
            <h1>Reservations</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="admin/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item active">Reservations</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Reservation Data</h2>
            @if(session()->has('edit success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <p>{{ session('edit success') }}</p>
                    </div>
                </div>
            @endif
            @if(session()->has('delete success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <p>{{ session('delete success') }}</p>
                    </div>
                </div>
            @endif
            @if(session()->has('add success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <p>{{ session('add success') }}</p>
                    </div>
                </div>
            @endif
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="myTable" class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Guest Name</th>
                            <th>Room Type</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Status</th>
                            <th>Reservation Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->guest_name }}</td>
                                <td>{{ $reservation->room->room_type }} Room</td>
                                <td>{{ \Carbon\Carbon::parse($reservation->check_in)->format('d/m/Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($reservation->check_out)->format('d/m/Y') }}</td>
                                <td>
                                    @switch($reservation->status)
                                        @case('check_in')
                                            <strong>Check In</strong>
                                            @break
                                        @case('check_out')
                                            <strong>Check Out</strong>
                                            @break
                                        @default
                                            <strong>Booking</strong>
                                    @endswitch
                                </td>
                                <td>{{ $reservation->created_at->translatedFormat('d/m/Y h:i') }}</td>
                                <td>
                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('script')
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
@endsection
