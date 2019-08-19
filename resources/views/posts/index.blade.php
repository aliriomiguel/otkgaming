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
        <h1>All Posts</h1>
        {{-- @foreach ($posts as $post) --}}
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped text-nowrap table-responsive">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Publisher
                            </th>
                            <th>
                                Category
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
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{route('posts.show', $post->id)}}">
                                        {{$post->title}}    
                                    </a>
                                </td>
                                <td>
                                    @if($post->author)
                                        {{$post->author}}
                                    @else
                                        N/A
                                    @endif        
                                </td>
                                <td>
                                    @if($post->user_id)
                                    {{$post->user->name}}
                                    @else
                                        N/A
                                    @endif    
                                </td>
                                <td>
                                    @if($post->category_id)
                                    {{$post->category->name}}
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>
                                    @if($post->featured > 0)   
                                        <div class="custom-control custom-switch">
                                            <input checked type="checkbox" class="custom-control-input" id="switch{{$post->id}}" onchange="featured({{$post->id}},this)">
                                            <label class="custom-control-label" for="switch{{$post->id}}"></label>
                                        </div>
                                    @else
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switch{{$post->id}}" onchange="featured({{$post->id}},this)">
                                            <label class="custom-control-label" for="switch{{$post->id}}"></label>
                                        </div>
                                    @endif    
                                </td>
                                <td>
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?')" action="{{route('posts.destroy', $post->id)}}" method="post">
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
            {{$posts->links()}}
        </div>
@endsection