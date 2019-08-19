@extends('master')
@section('content')
<h2 class="my-3">Add a Category</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('categories.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add a Category</button>
    </div>
</form>
@endsection