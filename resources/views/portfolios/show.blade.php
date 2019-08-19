@extends('master')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h2>{{$portfolio->name}}</h2>
    </div>
    <div class="card-body">
        <div>
            <label for="description">Description:</label>
            <p>
                {{$portfolio->description}}
            </p>
        </div>
        <div>
            <label for="website">URL/Website:</label>
            <br>
            <a href="{{$portfolio->website}}">{{$portfolio->website}}</a>
        </div>
        <br>
        <div>
            <label for="picture">Picture:</label>
            <br>
            <img src="/img/portfolio_pictures/{{$portfolio->picture}}" alt="portfolio_image">
        </div>
    </div>
</div>
@stop