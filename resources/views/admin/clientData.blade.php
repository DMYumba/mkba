@extends('admin.admin_dashboard')
@section('admin')

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ (!empty($profileData->photo)) ? url('assets/images/'.$profileData->photo) : 
                url('assets/images/faces/pic-1.png')}}"
                class="rounded-circle img-fluid" style="width: 120px;">
              <h5 class="my-3">ID: {{ $profileData->ClientID ?? 'Missing'}}</h5>
              <p class="text-muted mb-4">Phone: {{ $profileData->phone ?? 'Missing'}}/ {{ $profileData->other_phone ?? ''}}</p>
              <p class="text-muted mb-4">Email: {{ $profileData->email ?? 'Missing'}}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Client ID</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profileData->ClientID ?? 'Missing'}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tracking ID</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profileData->TrackID ?? 'Missing'}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Description of Goods/Vehicle</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profileData->description ?? 'Missing'}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Value of Goods</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profileData->goods_value ?? 'Not applicable'}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Maximum Budget(ZMW)</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">K {{ $profileData->budget_max ?? 'Missing'}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Minimum Budget(ZMW)</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">K {{ $profileData->budget_min ?? 'Missing'}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
