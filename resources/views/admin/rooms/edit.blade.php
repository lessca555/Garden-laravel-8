@extends('layouts.app')

@section('title', 'Edit Rooms')

@section('content')

        <div class="section-header">
            <h1>Edit Rooms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/rooms">Rooms</a></div>
                <div class="breadcrumb-item active">Edit Rooms</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="card-body">
                    <a href="{{ route('rooms.index') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('PUT')

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="room_type" class="form-label">Room Type</label>
                                    <input type="text" class="form-control" id="room_type" name="room_type" value="{{ old('room_type', $room->room_type) }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="number_of_rooms" class="form-label">Number of Room</label>
                                    <input type="number" class="form-control" id="number_of_rooms" name="number_of_rooms" value="{{ old('number_of_rooms', $room->number_of_rooms) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="facility_id" class="form-label">Room Facility</label>
                                    <select class="form-control" name="facility_id" id="facility_id" required>
                                        @foreach ($facilities as $facility)
                                            @if (old('facility_id', $room->facility_id) == $facility->id)
                                                <option value="{{ $facility->id }}" selected>{{ $facility->facility_name }}</option>
                                            @else
                                                <option value="{{ $facility->id }}">{{ $facility->facility_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" style="height:150px;">{{ old('decription', $room->description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Room Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
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