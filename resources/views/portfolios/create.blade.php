@extends('master')
@section('content')
<h2 class="my-3">Add a Portfolio Entry</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('portfolios.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Project Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
            <label for="website">URL/Website</label>
            <input type="text" name="website" id="website" class="form-control">
        </div>
    <div class="form-group">
        <label>Picture</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="picture" name="picture">
            <label class="custom-file-label" for="picture">Choose File</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add Portfolio Entry</button>
    </div>
</form>
@endsection