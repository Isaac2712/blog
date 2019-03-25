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
		<nav id="nav-pag-admin" class="navbar navbar-dark font-weight-bold">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucompleto" aria-controls="menucompleto">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <section class=" navbar-collapse" id="menucompleto">
		        <ul class="navbar-nav">
		        	<!-- EVENTOS -->
			        <li class="nav-item dropdown">
			          	<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="collapse">Eventos </a>
				          <ul class="dropdown-menu">
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="{{ route('añadir_evento') }}"> Añadir evento  </a> </li>
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Modificar evento </a> </li>
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Eliminar evento </a> </li>
				          </ul>
			        </li>
		          	<!-- NOTICIAS -->
			        <li class="nav-item">
			          	<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="collapse">Noticias </a>
				          <ul class="dropdown-menu">
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Añadir noticias </a> </li> 
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Modificar noticias </a> </li> 
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Eliminar noticias </a> </li> 
				          </ul>
			        </li>
					<!-- MANIFIESTOS -->
		            <li class="nav-item">
			          	<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="collapse">Manifiestos </a>
				          <ul class="dropdown-menu">
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Añadir manifiestos </a> </li> 
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Modificar manifiestos </a> </li> 
				          	<li class="nav-item hover-menu-administrador"> <a class="dropdown-item" href="#"> Eliminar manifiestos </a> </li> 
				          </ul>
		            </li>
		        </ul>
		    </section> 
		</nav>
		<aside id="aside-pag-admin" class="bg-dark p-3">
			<a class="text-white" href="{{ route('home') }}"> Volver a pagina </a>
		</aside>

		<!-- SECCION PARA LOS FORMULARIOS -->
		<section id="formulario-pag-admin" class="mt-2 container-fluid">
			@yield('formularios')
		</section>
		<!-- FIN SECCION PARA LOS FORMULARIOS -->
		

	</section> <!-- SECCION APP -->
<!-- SCRIPT PAR APP -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
