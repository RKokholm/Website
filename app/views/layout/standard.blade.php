<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="css/text" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
	@yield('title')
</head>
<body>
	<div id="header">
		<div id="headercenter">
			
			@if(Auth::check())

				<ul id="authlist">
					<li><a href="{{ URL::route('logout_path') }}">Log out</a></li>
					<li><a href="{{ URL::route('logout_path') }}">{{ Auth::user()->name }}</a></li>
				</ul>
			
			@else

				<ul id="authlist">
					<li><a href="{{ URL::route('login_path') }}">Login</a></li>
					<li><a href="{{ URL::route('registration_path') }}">Sign up</a></li>
				</ul>

			@endif

			<a href="{{ URL::route('index') }}"><span class="title">Website</span></a>
		
			<nav id="headernav">
				<ul>
					<li><a href="#">Story</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

		</div>
	</div>

	<div id="content">
		@yield('content')
	</div>
	
</body>
</html>