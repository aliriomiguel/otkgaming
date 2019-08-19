@extends('master')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h2>{{$service->name}}</h2>
        <p>
            {{$service->description}}
        </p>
        <img src="/img/icons/{{$service->icon}}" alt="service_image">
    </div>
</div>
@stop