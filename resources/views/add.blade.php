@extends('copypaste')

@section('title')Add
@endsection

@section('paste')


<h1>Add_New_Book_In_Library:</h1>
<form method="post" action="/add/check">
	@csrf
	<input type="text" name="name" id="name" placeholder="Insert_Author_Name" class="form-control"><br>
	<input type="text" name="surname" id="surname" placeholder="Insert_Author_Surname" class="form-control"><br>
	<input type="text" name="book" id="book" placeholder="Insert_Book" class="form-control"><br>
	<button type="submit" class="btn btn-success">Add_New_Book!</button>
</form>
<br>

@endsection