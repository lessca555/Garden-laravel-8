@extends('layouts.app')

@section('title', 'Edit Admin')

@section('content')

          <div class="section-header">
            <h1>Edit Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/roomFacilities">Admins</a></div>
              <div class="breadcrumb-item active">Edit Admin</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="card-body">
                <a href="{{ route('adminAccounts.index') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
              </div>
            </div>
            <form action="{{ route('adminAccounts.update', ['adminAccount' => $admin]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('PUT')

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $admin->name) }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $admin->email) }}" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" autofocus>
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