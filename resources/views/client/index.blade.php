@extends('client.client_dashboard')
@section('client')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
    </div>
    <hr>
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
                <th> Invoice </th>
                <th> Discription file </th>
                <th> Payment Invoice </th>
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
                    <td> {{$Data->address ?? 'Not Applicable'}} </td>
                    <td> <a class="btn btn-sm btn-success" href="{{route('client.viewInvoice',$Data->id)}}">View</a> </td>
                    <td> <a class="btn btn-sm btn-warning" href="{{route('client.viewFile',$Data->id)}}">View</a> </td>
                    <td> <label class="badge badge-info">Print</label> </td>
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