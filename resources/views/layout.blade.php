<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LGTBCREVILLENT</title>
	<link rel="icon" href="{{ asset('imagenes/LOGO.jpg') }}" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head> 
<?php
	if(isset($_SESSION['nick_usuario'])){
      $nick_usuario = $_SESSION['nick_usuario'];
    } else {
    	$nick_usuario = "";

    }
    if(isset($_SESSION['tipo_usuario'])){
      $tipo_usuario = $_SESSION['tipo_usuario'];
    }else{
    	$tipo_usuario = "";
    }
    
    if(isset($_POST['desconectar'])){
        session_destroy();
        //comprobar bien lo de las sesiones
     //   header("Location: home.blade.php");
    }
    function activeMenu($url){
        return request()->is($url) ? 'link-menu-principal' : '';
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
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('home') }}" href="{{ route('home') }}">INICIO</a>
              </li>
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('home') }}" href="{{ route('home') }}">MANIFIESTOS</a>
              </li>
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('home') }}" href="{{ route('home') }}">QUIENES SOMOS</a>
              </li> 
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('contacto') }}" href="{{ route('contacto') }}">CONTACTO</a>
              </li>
              <?php if(!isset($_SESSION['nick_usuario'])){ ?> <!-- Si no hay session -->
                    <li class="nav-item">
                        <a class="btn btn-dark bg-primary" role="button" href="{{ route('home') }}">REGISTRARSE</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark bg-primary" role="button" href="{{ route('acceder') }}">ACCEDER</a>
                    </li>
              <?php } if(($tipo_usuario) && $tipo_usuario == 'Admin'){ ?> 
              <!-- Si la session es de tipo usuario -->
                    <li class="nav-item">
                        <a class="nav-link {{ activeMenu('home') }}" href="{{ route('home') }}">ADMINISTRADOR</a>
                    </li>
              <?php } if(isset($_SESSION['nick_usuario'])){ ?> <!-- Si hay session -->
                    <form action='contacto' method='POST'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class='btn btn-danger' name='desconectar' type="submit"> DESCONECTAR </button>
                    </form>
              <?php } ?>
            </ul>
          </div> 
        </nav>
	</header>
  <main>
	 @yield('contenido')
  </main>

  <footer>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </footer>

</body>
</html>