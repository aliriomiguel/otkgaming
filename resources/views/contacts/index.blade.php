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
        <h1>All Messages</h1>
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped text-nowrap table-responsive-lg">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Message
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <a href="{{route('contacts.show', $contact->id)}}">
                                    {{$contact->name}}
                                    
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$contact->email}}
                                </a>
                            </td>
                            <td>
                                {{ str_limit($contact->content, $limit = 40, $end = '...') }}
                            </td>
                            <td>
                                <form class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this message?')" action="{{route('contacts.destroy', $contact->id)}}" method="post">
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
        <div class="mt-4 justify-content-center">
            {{$contacts->links()}}
        </div>
@endsection