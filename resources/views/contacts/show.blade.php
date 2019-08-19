@extends('master')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div>
            <span>Contact Name: {{$contact->name}}</span>
        </div>
        <div>
            <span>Contact email: {{$contact->email}}</span>
        </div>
        <div>
            <span>Contact phone: {{$contact->phone}}</span>
        </div>
        <div>
            <span>Message:</span>
            <br>
            <p class="card-text">
                {{$contact->content}}
            </p>
            <br>
        </div>
        <div>
            <span>Message date: {{$contact->created_at->formatLocalized('%d %B %Y %I:%M')}}{{$contact->created_at->format('a')}}</span>
        </div>
    </div>
</div>
@stop