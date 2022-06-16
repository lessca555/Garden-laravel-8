@extends('layouts.app')

@section('title', 'Hotel Facilities')

@section('content')
        <div class="section-header">
            <h1>Hotel Facilities</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="admin/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item active">Hotel Facilities</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hotel Facility Data</h2>
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
              <div class="card-body">
                <a href="{{ route('hotelFacilities.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Add</a>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                      <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-12">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-md">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Facility Name</th>
                                                        <th width="40%">Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @if(count($hotel_facilities)>0)
                                                        @foreach ($hotel_facilities as $hotel_facility)
                                                            <tr>
                                                                <td>{{ ++$i }}</td>
                                                                <td>{{ $hotel_facility->facility_name }}</td>
                                                                <td>{{ $hotel_facility->description }}</td>
                                                                <td><img src="{{ asset('storage/' . $hotel_facility->image) }}" alt="Image {{ $hotel_facility->facility_name }}" width="50"></td>
                                                                <td>
                                                                <form action="{{ route('hotelFacilities.destroy', $hotel_facility->id) }}" method="POST">
                                                                    <a href="{{ route('hotelFacilities.edit', $hotel_facility->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>

                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                                                </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr><td colspan="6" align="center">NO RECORDS FOUND</td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <nav class="d-inline-block">
                                                <ul class="pagination mb-0">
                                                    {!! $hotel_facilities->links() !!}
                                                </ul>
                                            </nav>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
          </div>
@endsection