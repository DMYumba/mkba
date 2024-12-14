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
                  <li class="breadcrumb-item active" aria-current="page">Goods</li>
                </ol>
              </nav>
            </div>
          </div>
        
        <h4 class="card-title">Goods - Code securing and Customs clearing - (Full service)</h4>
        <form method="POST" action="{{ route('client.services.goodsFullservice.store') }}" class="forms-sample" 
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
                <input type="hidden" class="form-control" id="service_type" name="service_type" value="Goods Clearing" readonly>
            </div>
            
            <div class="form-group">
                <input type="hidden" class="form-control" id="service_category" name="service_category" value="Full service" readonly>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Select boarder</label>
                <select class="form-control" name="boarder" id="boarder">
                  <option selected disabled>--Select available--</option>
                  <option>Nakonde</option>
                  <option>Katima Mulilo</option>
                  <option>Kazungula</option>
                </select>
              </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Brief description of goods on board</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Value of goods in transit</label>
                <input type="number" class="form-control" id="goods_value" name="goods_value" placeholder="enter the value of goods in transit" required>
              </div>
              <div class="form-group">
                <label>Upload Good's invoice</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" name="invoice" id="invoice" accept="image/*, .pdf">
                </div>
              </div>
            <div class="form-group">
              <label class="form-check-label text-muted">
              <input type="checkbox" class="form-check-input" required> <i>Admit to meet all costs and taxes to be paid direct to ZRA.</i>
            </div>
            <div class="form-group">
              <label class="form-check-label text-muted">
              <input type="checkbox" class="form-check-input" required> <i>By submitting this information you declare that details given are correct and you are 
                  liable for any false information given.</i>
            </div>
            <div class="form-group">
                <label class="text-red">Note</label>:
                 <i class="form-check-label text-muted text-red">The company commits to ensure goods are delivered on time once cleared.</i>
              </div>

            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

@endsection