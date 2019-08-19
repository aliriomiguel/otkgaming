@extends('master')
@section('content')
<div>
    <div class="card mb-3">
        <div class="card-body">
            <p>
                {{$about->about}}
            </p>
        </div>
    </div>
</div>

@stop