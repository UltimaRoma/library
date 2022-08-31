@extends('copypaste')

@section('title')Author
@endsection

@section('paste')

<h1>Authors_In_Library:</h1>


@foreach($allbooks as $el)
	
	<div class="alert alert-info">
		
		<h4>{{$el->name}} {{$el->surname}}</h4>

		<p>
			<?php
				$connect = mysqli_connect('127.0.0.1', 'boss', 'ave3', 'library');
				$booknum = mysqli_query($connect, "SELECT name, surname, COUNT(*) as books FROM `librarymods` GROUP BY name, surname");
				$rows = mysqli_num_rows($booknum);
				printf("Books_In_Library: %d",  $rows);
			?>
		</p>


		<a href="books"><button class="btn btn-warning">All Books</button></a>
	</div>

@endforeach

@endsection