@extends('layout.standard')

@section('title')
	<title>Register</title>
@stop

@section('content')
	<h1>Register</h1>

		{{ Form::open(['route' => 'registration_path']) }}

			{{ Form::text('name', null, ['class' => 'Formfield', 'placeholder' => 'Name']) }}<br>
			{{ Form::text('summoner_name', null, ['class' => 'Formfield', 'placeholder' => 'Summoner name']) }}<br>			
			{{ Form::text('email', null, ['class' => 'Formfield', 'placeholder' => 'Email']) }}<br>
			{{ Form::password('password', ['class' => 'Formfield', 'placeholder' => 'Password']) }}<br>
			{{ Form::password('repeat_password', ['class' => 'Formfield', 'placeholder' => 'Repeat Password']) }}<br>

			{{ Form::submit('Register', ['class' => 'Submitbutton']) }}

		{{ Form::close() }}

@stop