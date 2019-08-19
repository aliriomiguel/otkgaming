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
        <h1>All Categories</h1>
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped text-nowrap table-responsive-lg">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>
                                <a>
                                    {{$category->name}}
                                </a>
                            </td>
                            <td>
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">Edit</a>
                                <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this category?')" action="{{route('categories.destroy', $category->id)}}" method="post">
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
            {{$categories->links()}}
        </div>
@endsection