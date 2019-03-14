<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>LGTBCREVILLENT</title>
	<link rel="icon" href="{{ asset('imagenes/LOGO.jpg') }}" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="{{ asset('favicon/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
</head> 
<body>
	<section id="app">
		<nav class="navbar bg-dark navbar-dark w-25">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucompleto" aria-controls="menucompleto">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <section class="collapse navbar-collapse" id="menucompleto">
		        <ul class="navbar-nav">
		        	<!-- EVENTOS -->
			        <li class="nav-item">
			          	<a class="nav-link" href="#eventos" data-toggle="collapse" >Eventos
				          <ul class="collapse show" id="eventos">
				          	<li class="dropdown-item"> Añadir evento </li> 
				          	<li class="dropdown-item"> Modificar evento </li> 
				          	<li class="dropdown-item"> Eliminar evento </li> 
				          </ul>
				      	</a>
			        </li>
		          	<!-- NOTICIAS -->
			        <li class="nav-item">
			          	<a class="nav-link" href="#noticias" data-toggle="collapse" >Noticias
				          <ul class="collapse show" id="noticias">
				          	<li class="dropdown-item"> Añadir noticias </li> 
				          	<li class="dropdown-item"> Modificar noticias </li> 
				          	<li class="dropdown-item"> Eliminar noticias </li> 
				          </ul>
				      	</a>
			        </li>
					<!-- MANIFIESTOS -->
		            <li class="nav-item">
			          	<a class="nav-link" href="#manifiestos" data-toggle="collapse" >Manifiestos
				          <ul class="collapse show" id="manifiestos">
				          	<li class="dropdown-item"> Añadir manifiestos </li> 
				          	<li class="dropdown-item"> Modificar manifiestos </li> 
				          	<li class="dropdown-item"> Eliminar manifiestos </li> 
				          </ul>
				      	</a>
		            </li>
		        </ul>
		    </section> 
			<hr class="mt-2 bg-light w-75">
			<a class="text-white" href="{{ route('home') }}"> Volver a pagina </a>
		</nav>
	</section> <!-- SECCION APP -->
<!-- SCRIPT PAR APP -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
