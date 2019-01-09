<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layout</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<header>
		<?php
			function activeMenu($url){
				return request()->is($url) ? 'active' : '';
			}
		?>
		<nav>
			<ul class="nav navbar nav-pills justify-content-end">
				<li class="nav-item">
					<a class="nav-link {{ activeMenu('/') }}" href="{{ route('home') }}"> Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ activeMenu('contacto') }}" href="{{ route('contacto') }}"> Contacto </a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ activeMenu('saludo') }}" href="{{ route('saludo') }}"> Saludo</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('contenido')	
	</main>
</body>
</html>

