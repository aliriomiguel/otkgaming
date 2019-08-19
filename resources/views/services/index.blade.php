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
        <h1>All Services</h1>
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
@endsection