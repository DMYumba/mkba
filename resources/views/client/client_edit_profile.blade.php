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

        <h4 class="card-title">Edit admin profile for all</h4>
        <form method="POST" action="{{ route('admin.profile.store') }}" class="forms-sample" 
        enctype="multipart/form-data">
        @csrf

          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $profileData->name }}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Phone </label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $profileData->phone }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $profileData->email }}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $profileData->address }}">
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="photo" id="image" placeholder="Upload Image">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName1"></label>
            <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('assets/images/'.$profileData->photo) : 
                url('assets/images/faces/face1.jpg')}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 100px;">
          </div>

          <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
        </form>
      </div>
    </div>
  </div>


  <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

  </script>

@endsection