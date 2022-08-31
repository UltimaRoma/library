@extends('copypaste')

@section('title')Books
@endsection

@section('paste')

<h1>Books_In_Library:</h1>

@foreach($allbooks as $el)
	<div class="alert alert-info">
		<h4>{{$el->book}}</h4>
		<p> {{$el->name}} {{$el->surname}}</p>
		<a href="{{ route('thisbook', $el->id) }}"><button class="btn btn-warning">About_And_CRUD</button></a>
	</div>
@endforeach

@endsection