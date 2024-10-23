
@extends('layout')

@section('content')

<legend style="font-weight: bold; font-size: 32px;" class="text-center mt-2 mb-5">New Book Added</legend>

<div class="text-end">
    <a class='btn btn-primary fw-bold' href="{{ route('books.index') }}">Go Back</a>
</div>

<!-- Form to Add a New Book -->
<form method="post" action="{{ route('books.store') }}">
    @csrf

    <!-- Title Input -->
    <div class="mb-2">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" 
               name="title" value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Author Input -->
    <div class="mb-2">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" 
               name="author" value="{{ old('author') }}">
        @error('author')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- ISBN Input -->
    <div class="mb-2">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control @error('isbn') is-invalid @enderror" 
               name="isbn" value="{{ old('isbn') }}">
        @error('isbn')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Stock Input -->
    <div class="mb-2">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" 
               name="stock" value="{{ old('stock') }}">
        @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Price Input -->
    <div class="mb-2">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" 
               name="price" value="{{ old('price') }}">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary fw-bold">Submit</button>
</form>

@endsection




























{{-- @extends('layout')

@section('content')



  <legend style=" font-weight: bold; font-size: 32px;" class="text-center mt-2 mb-5">New Book Added</legend>

  
  <div class="text-end ">
    <a class='btn btn-primary fw-bold' href="{{ route('books.index') }}">Go Back</a>
</div>

<form method="post" action="{{ route('books.store') }}">
    @csrf

    <div class="mb-2">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{old('title')}}">
      <div>{{ $errors->first('title') }}</div>
    </div>

    <div class="mb-2">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" name="author" value="{{old('author')}}">
        <div>{{ $errors->first('author') }}</div>
    </div>

    <div class="mb-2">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}">
        <div>{{ $errors->first('isbn') }}</div>
    </div>
    
    <div class="mb-2">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{old('stock')}}">
        <div>{{ $errors->first('stock') }}</div>
    </div>

    <div class="mb-2">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{old('price')}}">
        <div>{{ $errors->first('price') }}</div>
    </div>

    <button type="submit" class="btn btn-primary fw-bold">Submit</button>
  </form>

@endsection --}}