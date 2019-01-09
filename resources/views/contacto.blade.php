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
			      	<label for="inputEmail4">Email</label>
			      	<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
			    </div>
			    <div class="form-group">
			      	<label for="inputPassword4">Password</label>
			      	<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
			    </div>
		  	</div>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</main>
	</body>
@stop