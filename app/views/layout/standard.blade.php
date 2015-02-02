<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="css/text" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	@yield('title')
</head>
<body>
	<div id="header">
		<div id="headercenter">
			
			@if(Auth::check())
				<a href="{{ URL::route('logout_path') }}" id="headername"><span>{{ Auth::user()->summ_name }}</span></a>
			@else

				<ul id="authlist">
					<li><a href="{{ URL::route('login_path') }}">Login</a></li>
					<li><a href="{{ URL::route('registration_path') }}">Sign up</a></li>
				</ul>

			@endif

			<a href="{{ URL::route('index') }}"><span class="title">Runeterra Ravens</span></a>
		
			<nav id="headernav">
				<ul>
					<li><a href="#">Forums</a></li>
					<li><a href="#">News</a></li>
					<li><a href="{{ URL::route('management_path') }}">Management</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Empty</a></li>
				</ul>
			</nav>

		</div>
	</div>

	<div id="content">
		@yield('content')
	</div>
	
</body>
</html>