@extends('master')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h2>{{$post->title}}</h2>
    </div>
    <div class="card-body">
        <p>
            {{$post->content}}
        </p>
        
        <div>
            <span>Category:</span> {{$post->category->name}}    
        </div>
        <div>
            <span>Author:</span> {{$post->author}}    
        </div>
        <div>
            <span>Publisher:</span> {{$post->user->name}}    
        </div>
        <div>
            <span>Date:</span> {{$post->created_at->formatLocalized('%d %B %Y %I:%M')}}{{$post->created_at->format('a')}}    
        </div>

    </div>
</div>
@stop