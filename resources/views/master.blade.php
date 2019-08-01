<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    {{-- Menu --}}
    <div class="bg-info text-white p-5 mb-3">
        <a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
        <a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
        @auth
        <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
            @csrf
            <a>Logged as {{auth()->user()->name}} | </a><button class="btn btn-secondary">Logout</button>
        </form>
        @else
        <a href="{{route('login')}}" class="btn btn-secondary d-inline-block float-right">Login</a>
        @endauth
    </div>
    {{-- end menu --}}
    <div class="container">        
        @yield('content')
    </div>
    {{-- footer --}}
    <div class="bg-dark text-white p-4 text-center">
        All rights reserved Alirio Aranguren {{date('Y')}}
    </div>
    {{-- end footer --}}
</body>
</html>