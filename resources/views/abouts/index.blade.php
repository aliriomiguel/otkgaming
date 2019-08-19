@extends('master')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
        <h1>All About Texts</h1>
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped text-nowrap table-responsive-lg">
                    <thead>
                        <tr>
                            <th>
                                Text
                            </th>
                            <th>
                                Show on Landing Page
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                        <tr>
                            <td>
                                <a href="{{route('abouts.show', $about->id)}}">
                                    {{ str_limit($about->about, $limit = 40, $end = '...') }}
                                    {{-- {{$about->about}} --}}    
                                </a>
                            </td>
                            <td>
                                @if($about->active_text > 0)   
                                    <div class="custom-control custom-switch">
                                        <input checked type="checkbox" class="custom-control-input" id="switch-about{{$about->id}}" onchange="show_active({{$about->id}},this)">
                                        <label class="custom-control-label" for="switch-about{{$about->id}}"></label>
                                    </div>
                                @else
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch-about{{$about->id}}" onchange="show_active({{$about->id}},this)">
                                        <label class="custom-control-label" for="switch-about{{$about->id}}"></label>
                                    </div>
                                @endif    
                            </td>
                            <td>
                                <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-info">Edit</a>
                                <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?')" action="{{route('abouts.destroy', $about->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            {{$abouts->links()}}
        </div>
@endsection