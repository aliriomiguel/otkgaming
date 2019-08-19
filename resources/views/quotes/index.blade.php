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
        <h1>All Quotes</h1>
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
        <div class="mt-4">
            {{$quotes->links()}}
        </div>
@endsection