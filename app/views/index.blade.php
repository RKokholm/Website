@extends ('layout.standard')

@section('title')
	<title>Home</title>
@stop

@section('content')

	@if(Auth::check())
		<h1>Velkommen {{ Auth::user()->name }}</h1>
	@else
		<h1>Du skal logge ind</h1>
	@endif

@stop