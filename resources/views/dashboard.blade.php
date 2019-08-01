@extends('master')

@section('content')
        <h1>Dashboard</h1>
        <h2>Active Posts</h2>
        <h2>About Text</h2>
        <h2>Services</h2>
        <h2>Portfolios</h2>
        <h2>Quotes</h2>
        {{-- <h1>All Posts</h1>
        @foreach ($posts as $post)
        <div class="card mt-4">
            <div class="card-body">
                <h2>
                    <a href="{{route('posts.show', $post->id)}}">
                        {{$post->title}}    
                    </a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?')" action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </h2>
            </div>
        </div>    
        @endforeach
        <div class="mt-4">
            {{$posts->links()}}
        </div> --}}
@endsection