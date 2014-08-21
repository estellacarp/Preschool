<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
		@yield('css')

	</head>
	<body>
		
		<img src="asset/image/flyaway.jpg" height="200px">
		<div>

			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="{{ URL::to('home') }}">Home</a></li>
				<li><a href="{{ URL::to('theme')}}">Themes</a>	</li>
				<li><a href= "{{ URL::to('plans')}}">Lesson Plans</a></li>
				<li><a href= "{{ URL::to('art')}}">Art Activites</a></li>
				<li><a href= "{{ URL::to('art')}}">Book Activites</a></li>
				<li><a href= "{{ URL::to('art')}}">Songs</a></li>
			</ul>
		</div>
		<a href="{{ URL::to('login') }}">Go to login page</a>
		
		@yield('content')
		
	</body>
</html>