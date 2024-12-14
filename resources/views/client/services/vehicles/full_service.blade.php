@extends('client.client_dashboard')
@section('client')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Motor vehicle</li>
                </ol>
              </nav>
            </div>
          </div>
        
        <h4 class="card-title">Vehicle - Sourcing, Customs clearing and delivery - (Full service)</h4>
        <form method="POST" action="{{ route('client.services.vehiclesFullservice.store') }}" class="forms-sample" 
        enctype="multipart/form-data">
        @csrf

            <div class="form-group">
              <label for="exampleInputName1">NRC No</label>
              <input type="text" class="form-control" id="ClientID" name="ClientID" value="{{ Auth::user()->ClientID }}" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Contact mobile</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="your mobile phone" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Reference person's mobile</label>
              <input type="text" class="form-control" id="other_phone" name="other_phone" placeholder="refrence person's mobile" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="service_type" name="service_type" value="Motor Vehicle Clearing" readonly>
            </div>
            
            <div class="form-group">
                <input type="hidden" class="form-control" id="service_category" name="service_category" value="Full service" readonly>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Delivery address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="enter delivery address" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Min Budget (ZMW)</label>
              <input type="number" class="form-control" id="budget_min" name="budget_min" placeholder="enter your minimum budget" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Max Budget (ZMW)</label>
              <input type="number" class="form-control" id="budget_max" name="budget_max" placeholder="enter your maximum budget" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Brief description <i class="form-check-label text-muted text-red">(e.g 
                  Vehicles TOYOTA Mark X 2010 model, 2.5Ltr Color grey etc.)</i></label>
                <textarea class="form-control" id="description" name="description" required></textarea>
              </div>
            <div class="form-group">
              <label>Upload vehicle pictures as one pdf file<i class="form-check-label text-muted text-red"> (Please ensure that
                you attach a file e.g image similar to the vehicle you want as this will enhence our processes.)</i></label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="file" class="form-control file-upload-info" name="desc_file" id="desc_file" accept="image/*, .pdf">
              </div>
            </div>
            <div class="form-group">
              <label class="form-check-label text-muted">
              <input type="checkbox" class="form-check-input" required> <i>Admit to meet all transport cost like, insurance fuel and taxes.</i>
            </div>
            <div class="form-group">
              <label class="form-check-label text-muted">
              <input type="checkbox" class="form-check-input" required> <i>By submitting this information you declare that details given are correct and you are 
                  liable for any false information given.</i>
            </div>
            <div class="form-group">
                <label class="text-red">Note</label>:
                 <i class="form-check-label text-muted text-red">The company commits to ensure the vehicle is delivered within 4 days once cleared.</i>
              </div>

            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

@endsection