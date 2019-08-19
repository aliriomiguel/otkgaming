@extends('master')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <h1>Dashboard</h1>

        <section class="posts">
            <h2>Active Posts</h2>

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
        </section>

        <section class="portfolio">
            <h2>Portfolio Entries</h2>
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-striped text-nowrap table-responsive-lg">
                        <thead>
                            <tr>
                                <th>
                                    Project Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    URL
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>
                                    <a href="{{route('portfolios.show', $portfolio->id)}}">
                                        {{$portfolio->name}}
                                    </a>
                                </td>
                                <td>
                                    {{ str_limit($portfolio->description, $limit = 40, $end = '...') }}
                                </td>
                                <td>
                                    <a href="{{$portfolio->website}}">
                                        {{$portfolio->website}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-info">Edit</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this portfolio?')" action="{{route('portfolios.destroy', $portfolio->id)}}" method="post">
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
                {{$portfolios->links()}}
            </div>
        </section>

        <section class="services">
            <h2>Services</h2>
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-striped text-nowrap table-responsive-lg">
                        <thead>
                            <tr>
                                <th>
                                    Service Icon
                                </th>
                                <th>
                                    Service Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>
                                    {{-- Service Icon --}}
                                    {{-- <a href="{{route('services.show', $service->id)}}">
                                        {{ str_limit($service->service, $limit = 40, $end = '...') }}
                                    </a> --}}
                                    <img class="avatar" src="/img/icons/{{$service->icon}}" alt="service_image">
                                </td>
                                <td>
                                    <a href="{{route('services.show', $service->id)}}">
                                        {{$service->name}}
                                    </a>
                                </td>
                                <td>
                                        {{ str_limit($service->description, $limit = 40, $end = '...') }}
                                </td>
                                <td>
                                    <a href="{{route('services.edit', $service->id)}}" class="btn btn-info">Edit</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this service?')" action="{{route('services.destroy', $service->id)}}" method="post">
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
                {{$services->links()}}
            </div>
        </section>
        
        <section class="abouts">
            <h2>About Text</h2>
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
        </section>

        <section class="quotes">
            <h2>Quotes</h2>
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-striped text-nowrap table-responsive-lg">
                        <thead>
                            <tr>
                                <th>
                                    Quote
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotes as $quote)
                            <tr>
                                <td>
                                    <a href="{{route('quotes.show', $quote->id)}}">
                                        {{ str_limit($quote->quote, $limit = 40, $end = '...') }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{$quote->author}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('quotes.edit', $quote->id)}}" class="btn btn-info">Edit</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this quote?')" action="{{route('quotes.destroy', $quote->id)}}" method="post">
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
                {{$quotes->links()}}
            </div>
        </section>
        
@endsection