@extends('master')
@section('content')
<h2 class="my-3">Update quote</h2>
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
<form action="{{route('quotes.update', $quote->id)}}" method="post">
    @csrf
    @method('put')
    
    <div class="form-group">
        <label for="quote">Quotes</label>
        <textarea name="quote" id="quote" cols="30" rows="10" class="form-control">{{$quote->quote}}</textarea>
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" id="author" class="form-control" value="{{$quote->author}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Update quote</button>
    </div>
</form>
@endsection