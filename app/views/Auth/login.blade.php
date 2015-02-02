@extends('layout.standard')

@section('title')
	<title>Login</title>
@stop

@section('content')
	<h1>Login</h1>
	
		@if($errors->has())

			@foreach($errors->all() as $error)
				{{ $error }}<br>	
			@endforeach
		
		@endif

		{{ Form::open(['route' => 'login_path']) }}
			{{ Form::email('email', null, ['class' => 'formfield', 'required' => 'required', 'placeholder' => 'Email']) }}<br>
			{{ Form::password('password', ['class' => 'formfield', 'required' => 'required', 'placeholder' => 'Password']) }}<br>
			{{ Form::submit('Sign in') }}
		{{ Form::close() }}
@stop