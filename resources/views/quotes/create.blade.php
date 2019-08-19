@extends('master')
@section('content')
<h2 class="my-3">Add a Quote</h2>
@if($errors->all())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('quotes.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="quote">Quote</label>
        <textarea name="quote" id="quote" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add a Quote</button>
    </div>
</form>
@endsection