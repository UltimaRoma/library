@extends('copypaste')

@section('title') {{$allbooks->book}}
@endsection

@section('paste')

<h1>{{ $allbooks->book }}</h1>

	<div class="alert alert-info">
		<h3> {{$allbooks->name}} {{$allbooks->surname}}</h3>
		<a href="{{ route('thisbookupd', $allbooks->id) }}"><button class="btn btn-warning">Update</button></a> 
		<a href="{{ route('thisbookdel', $allbooks->id) }}"><button class="btn btn-danger">Delete</button></a>
	</div>


@endsection