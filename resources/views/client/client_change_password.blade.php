@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="{{ (!empty($profileData->photo)) ? url('assets/images/'.$profileData->photo) : 
                    url('assets/images/faces/face1.jpg')}}"
                    class="rounded-circle img-fluid" style="width: 120px;">
                  <h5 class="my-3">{{ $profileData->username }}</h5>
                  <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">{{ $profileData->address }}</p>
                </div>
              </div>
            </div>
        
        <div class="col-lg-4">
        <h4 class="card-title">Admin Change password</h4>
        <form method="POST" action="{{ route('admin.update.password') }}" class="forms-sample">
        @csrf

          <div class="form-group">
            <label for="exampleInputName1">Old password</label>
            <input type="password" class="form-control @error('old_password') is-invalid @enderror" 
            id="old_password" name="old_password">
            @error('old_password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">New password</label>
            <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
            id="'new_password" name="new_password">
            @error('new_password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Confirm New password</label>
            <input type="password" class="form-control" 
            id="'new_password_confirmation" name="new_password_confirmation">
          </div>

          <button type="submit" class="btn btn-gradient-primary me-2">Change password</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection