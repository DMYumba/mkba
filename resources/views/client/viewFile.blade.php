@extends('client.client_dashboard')
@section('client')

<h4>Tracking ID: {{$Data->TrackID}}</h4>
<iframe height="700" width="1000" src="/client_backend/assets/uploads/{{$Data->desc_file ?? 'Not found'}}"></iframe>

@endsection
