<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layout</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<ul>
				<li><a class="nav-link" href="{{ route('home') }}"> Home </a></li>
				<li><a class="nav-link" href="{{ route('contacto') }}"> Contacto </a></li>
				<li><a class="nav-link" href="{{ route('saludo') }}"> Saludo</a></li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('contenido')	
	</main>
</body>
</html>

