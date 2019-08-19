@extends('master')
@section('content')
<h2 class="my-3">Add an About Text</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('abouts.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="about">About text</label>
        <textarea name="about" id="about" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add an About Text</button>
    </div>
</form>
@endsection