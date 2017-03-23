<!DOCTYPE html>
<html>
<head>

	<title></title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/album.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/blog-nav.css') }}">

	<!-- Fonts 
	<link href="fonts/Raleway-Regular.ttf" rel="stylesheet" type="text/css"> -->

	<!-- Backup CSS of Default Laravel Homepage 
	<link rel="stylesheet" href="{{ URL::asset('css/laravel_default.css') }}">
	-->

</head>
<body>

	<!-- NavBar SetUp here -->
	@include('partials.nav')

	<!-- Content Goes here -->
	<div class="container">@yield('content')</div>

	@include('partials.sidebar')

	<!-- Footer SetUp here -->
	@include('partials.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>