@extends('master')

@section('content')
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
        <h1>All Portfolios Entries</h1>
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
@endsection