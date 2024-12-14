@extends('admin.admin_dashboard')
@section('admin')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Admin Dashboard 
      </h3>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src=" {{ url('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Pending <i class="mdi mdi-lan-pending mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$pending}}</h2>
            <h6 class="card-text">Not yet attended to by agent.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{ url('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Cleared <i class="mdi mdi-marker-check mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$cleared}}</h2>
            <h6 class="card-text">Processed and cleared by agent.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ url('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Delivered <i class="mdi mdi-truck-delivery mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$delivered}}</h2>
            <h6 class="card-text">Agent deliver and custmer comfirms.</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Service Orders</h4>
          </p>
          <div class="table-container">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Tracking ID </th>
                <th> Client ID </th>
                <th> Service Type </th>
                <th> Service Category </th>
                <th> Boarder </th>
                <th> Status </th>
                <th> Delivery address </th>
                <th> Update status </th>
                <th> Invoice </th>
                <th> Discription file </th>
                <th> Payment Invoice </th>
                <th> More detail </th>
              </tr>
            </thead>
            <tbody>

              @if (count($ViewData) > 0)
                  @foreach ($ViewData as $Data)
                  <tr>
                    <td> {{$loop->iteration}}</td>
                    <td> {{$Data->TrackID}} </td>
                    <td> {{$Data->ClientID}} </td>
                    <td> {{$Data->service_type}} </td>
                    <td> {{$Data->service_category}} </td>
                    <td> {{$Data->boarder ?? 'Not Applicable'}} </td>
                    <td><label class="badge badge-danger">{{ \Status::label($Data->status) }}</label>
                    </td>
                    <td>{{$Data->address ?? 'Not Applicable'}} </td>
                    <td>
                      <form method="POST" action="{{ route('admin.status.store',$Data->id) }}">
                        @csrf
                        
                        <div class="form-group">
                            <div class="input-group">
                              <select class="form-control" id="status" name="status">
                                <option selected disabled>--Select status--</option>
                                <option value="2">In Process</option>
                                <option value="4">Cleared</option>
                                <option value="5">Delivered</option>
                              </select>
                              <div class="input-group-append">
                              <button type="submit" class="btn btn-sm btn-info">Update</button>
                            </div>
                          </div>
                        </div>
                      </form> 
                    
                    </td>
                    <td>  
                      <a class="btn btn-sm btn-success" href="{{route('admin.viewFile',$Data->id)}}">View</a>
                    </td>
                    <td> <a class="btn btn-sm btn-warning" href="{{route('admin.descriptFile',$Data->id)}}">View</a> </td>
                    <td> <a class="btn btn-sm btn-danger" href="#">Print</a> </td>
                    <td> <a class="btn btn-sm btn-success" href="{{route('admin.clientData',$Data->id)}}">Open</a> </td>
                  </tr>
                  @endforeach


              @else
                
              @endif

              
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  
  </div>

@endsection