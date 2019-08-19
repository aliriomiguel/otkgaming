@extends('master')
@section('content')
<h2 class="my-3">Update category</h2>
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
<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control" value="{{$category->name}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Update category</button>
    </div>
</form>
@endsection