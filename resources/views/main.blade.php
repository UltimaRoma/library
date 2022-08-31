@extends('copypaste')

@section('title')Main_Page
@endsection

@section('paste')

<div class="container-fluid">
	<h1 class="display-5 fw-bold">Add_book</h1>
	<p class="col-md-8 fs-4">In this library you can add new book. Let's do this!</p>
	<a class="btn btn-outline-light" href="{{ route('add') }}">Add_New_Book</a>
</div>

<div class="col-md-6 py-3">
        <div class="h-100 p-5 text-bg-light rounded-3">
          <h2>Author</h2>
          <p>Let's see what authors now in library</p>
          <a class="btn btn-outline-dark" href="{{ route('author') }}">Add_New_Book</a>
        </div>
      </div>

<div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Books</h2>
          <p>Let's see what books now in library</p>
          <a class="btn btn-outline-light" href="{{ route('books') }}">Add_New_Book</a>
        </div>
      </div>

@endsection