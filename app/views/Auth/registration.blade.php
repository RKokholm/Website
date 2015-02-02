@extends('layout.standard')

@section('title')
	<title>Register</title>
@stop

@section('content')
	<h1>Register</h1>

		@if($errors->has())
			
			@foreach($errors->all() as $error)
				{{ $error }}<br>
			@endforeach

		@endif

		{{ Form::open(['route' => 'registration_path']) }}

			{{ Form::text('name', null, ['class' => 'formfield', 'required', 'placeholder' => 'Name']) }}<br>
			{{ Form::text('summ_name', null, ['class' => 'formfield', 'required', 'placeholder' => 'Summoner name']) }}<br>			
			{{ Form::email('email', null, ['class' => 'formfield', 'required', 'placeholder' => 'Email']) }}<br>
			{{ Form::password('password', ['class' => 'formfield', 'required', 'placeholder' => 'Password']) }}<br>
			{{ Form::password('password_confirmation', ['class' => 'formfield', 'required', 'placeholder' => 'Repeat Password']) }}<br>

			{{ Form::submit('Register', ['class' => 'Submitbutton']) }}

		{{ Form::close() }}

@stop