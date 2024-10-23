@extends('layout')

@section('content')

<legend style=" font-weight: bold; font-size: 32px;" class="text-center mt-2 mb-5">Book Details</legend>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <td>{{$book->id}}</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>{{$book->title}}</td>
    </tr>
    <tr>
        <th>Author</th>
        <td>{{$book->author}}</td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>{{$book->isbn}}</td>
    </tr>
    <tr>
        <th>Stock</th></th>
        <td>{{$book->stock}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$book->price}}</td>
    </tr>
</table>

<a class="btn btn-primary" href="{{ route('books.index') }}">Back</a> 

@endsection