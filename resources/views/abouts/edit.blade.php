@extends('master')
@section('content')
<h2 class="my-3">Update About Text</h2>
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
<form action="{{route('abouts.update', $about->id)}}" method="post">
    @csrf
    @method('put')
    {{-- <div class="form-group">
        <label for="title">Title</label>
        <input name="title" id="title" class="form-control" value="{{$post->title}}">
    </div> --}}
    <div class="form-group">
        <label for="about">Text</label>
        <textarea name="about" id="about" cols="30" rows="10" class="form-control">{{$about->about}}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Update post</button>
    </div>
</form>
@endsection