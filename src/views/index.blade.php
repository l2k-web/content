@extends('contents::layout')

@section('main')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('contents.create') }}"> Create New Product</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($contents as $content)
    <tr>
        <td>{{ $content->title }}</td>
        <td>{{ $content->description }}</td>
        <td>
            <form action="{{ route('contents.destroy', $content->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('contents.show', $content->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('contents.edit', $content->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
