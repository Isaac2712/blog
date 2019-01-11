@extends('layout')
@section('contenido')
	<body class="container-fluid">
		<head>
			<h1> Página de contactos </h1>
		</head>
		<main class="container">
			<form method="POST" action="contacto">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  	<div class="form-col">
		    	<div class="form-group">
			      	<label for="email_contacto">Email</label>
			      	<input type="text" class="form-control" name="email_contacto" id="email_contacto" placeholder="Email" value="{{ old('email_contacto') }}">
			    </div>
			    {!! $errors->first('email_contacto', '<div class="alert alert-danger" role="alert"> :message </div>') !!}
			    <div class="form-group">
			      	<label for="password_contacto">Password</label>
			      	<input type="password" class="form-control" name="password_contacto" id="password_contacto" placeholder="Password" value="{{ old('password_contacto') }}">
			    </div>
			    {!! $errors->first('password_contacto', '<div class="alert alert-danger" role="alert"> :message </div>') !!}
		  	</div>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</main>
	</body>
@stop