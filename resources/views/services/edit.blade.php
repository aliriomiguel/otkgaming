@extends('master')
@section('content')
<h2 class="my-3">Update service</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
<form action="{{route('services.update', $service->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control" value="{{$service->name}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$service->description}}</textarea>
    </div>
    <div class="form-group">
        <label>Current Icon</label>
        <img class="avatar" src="/img/icons/{{$service->icon}}" alt="service_image">
    </div>
    <div class="form-group">
        <label>Change Icon</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="icon" name="icon">
            <label class="custom-file-label" for="icon">Choose File</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Update service</button>
    </div>
</form>
@endsection