<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layout</title>
</head>
<body>
	<header>
		<nav>
			<a href="{{ route('home') }}"> Home </a>
			<a href="{{ route('contacto') }}"> Contacto </a>
			<a href="{{ route('saludo') }}"> Saludo</a>
		</nav>
	</header>
	<main>
		@yield('contenido')	
	</main>
</body>
</html>