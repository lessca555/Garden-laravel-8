@extends('layouts.app')

@section('title', 'Add Hotel Facilities')

@section('content')

          <div class="section-header">
            <h1>Add Hotel Facilities</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/rooms">Hotel Facilities</a></div>
              <div class="breadcrumb-item active">Add Hotel Facilities</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="card-body">
                <a href="{{ route('hotelFacilities.index') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
              </div>
            </div>
            <form action="{{ route('hotelFacilities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="facility_name" class="form-label">Facility Name</label>
                                    <input type="text" class="form-control" id="facility_name" name="facility_name" value="{{ old('facility_name') }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" style="height:150px;">{{ old('decription')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>

@endsection