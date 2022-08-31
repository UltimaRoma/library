@extends('copypaste')

@section('title')Update_Book
@endsection

@section('paste')


<h1>Update_The_Book:</h1>
<form method="post" action="{{ route('thisbookcrudok', $allbooks->id) }}">
	@csrf
	<input type="text" name="name" id="name" value="{{$allbooks->name}}" placeholder="Insert_Author_Name" class="form-control"><br>
	<input type="text" name="surname" id="surname" value="{{$allbooks->surname}}" placeholder="Insert_Author_Surname" class="form-control"><br>
	<input type="text" name="book" id="book" value="{{$allbooks->book}}" placeholder="Insert_Book" class="form-control"><br>
	<button type="submit" class="btn btn-success">Update!</button>
</form>
<br>

@endsection