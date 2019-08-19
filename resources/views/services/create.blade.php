@extends('master')
@section('content')
<h2 class="my-3">Add a Service</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Service Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Icon</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="icon" name="icon">
            <label class="custom-file-label" for="icon">Choose File</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add a Service</button>
    </div>
</form>
@endsection