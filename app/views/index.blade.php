@extends ('layout.standard')

@section('title')
	<title>Home</title>
@stop

@section('content')

	@if(Auth::check())
		Velkommen {{ Auth::user()->name }}
	@else
		Du skal logge ind
	@endif

@stop