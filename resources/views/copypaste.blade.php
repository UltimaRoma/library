<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary text-white">

	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 pb-3 mb-4 border-bottom bg-dark text-white">
      	<a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4">LIBRARY_TEST</span>
      	</a>

      <nav class="d-inline-flex mt-2 mt-md-0 mr-4 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('main') }}">Main_Page</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('author') }}">Author</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('books') }}">Books</a>
        <a class="btn btn-outline-primary" href="{{ route('add') }}">Add_New_Book_In_Library</a>
      </nav>
    </div>
  
  <div class="container">
    @include('messages')
    @yield('paste')
  </div>

</body>
</html>