<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LGTBCREVILLENT</title>
	<link rel="icon" href="{{ asset('imagenes/LOGO.jpg') }}" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head> 
<?php
	if(isset($_SESSION['tipo'])){
        $tipoUsuario = $_SESSION['tipo'];
    } else {
    	$tipoUsuario = "";

    }
    $_SESSION['tipo'] = 'Admin';
    $_SESSION['nick'] = 'Isaac';
    if(isset($_SESSION['nick'])){
        $nombreUsuario = $_SESSION['nick'];
    }else{
    	$nombreUsuario = "";
    }
    
    if(isset($_POST['desconectar'])){
        session_destroy();
        header('Location: home.blade.php');
    }
?>
<body id="contenedor"> 
    <header> <!-- sticky-top hace que el header vaya hacia abajo -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class='imagen-index' src="imagenes/LOGO.jpg" width="100px" height="50px" title="Inicio"/>
                <span class="title-nav"> LGTB Crevillent </span>
            </a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse d-flex justify-content-lg-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">MANIFIESTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">QUIENES SOMOS</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a>
              </li>
              <?php if(!isset($_SESSION['nick'])){ ?> <!-- Si no hay session -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">REGISTRARSE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">ACCEDER</a>
                    </li>
              <?php } if(($tipoUsuario) && $tipoUsuario == 'Admin'){ ?> 
              <!-- Si la session es de tipo usuario -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">ADMINISTRADOR</a>
                    </li>
              <?php } if(isset($_SESSION['nick'])){ ?> <!-- Si hay session -->
                    <form action='index.php' method='POST'>
                        <button class='btn btn-danger' name='desconectar' type="submit"> DESCONECTAR </button>
                    </form>
              <?php  } ?>
              <
            </ul>
          </div> 
        </nav>
	</header>
	@yield('contenido')