<!DOCTYPE html>
<html>
	<head>
		<title>Private</title>
	</head>
	<body>
	<h4><a href="{{ URL::to('home') }}">HOME</a>
	<a href="{{ URL::to('create') }}">CREATE</a>
	<a href="{{ URL::to('dashboard') }}">DASHBOARD</a>

	</h4>
		@yield('content')
	</body>
</html>