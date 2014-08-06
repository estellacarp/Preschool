<!DOCTYPE html>
<html>
	<head>
		<title>Public Page @yield('title') </title>
		@yield('css')
	</head>
	<body>
		
		<img src="asset/image/flyaway.jpg" height="200px">
		<a href="{{ URL::to('login') }}">Go to login page</a>
		<h1>Welcome to Fly Away Preschool</h1>
		@yield('content')
	</body>
</html>