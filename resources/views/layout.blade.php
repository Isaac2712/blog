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

    function activeMenu($url){
        return request()->is($url) ? 'link-menu-principal' : '';
    }
?>
<body id="contenedor"> 
<section id="app">
<header> <!-- sticky-top hace que el header vaya hacia abajo -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <a class="navbar-brand" href="{{ route('home') }}">
          <img class='imagen-index' src="/imagenes/LOGO.jpg" width="100px" height="50px" title="Inicio"/>
          <span class="title-nav ml-3"> LGTB Crevillent </span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

      <section class="collapse navbar-collapse d-flex-lg justify-content-lg-end" id="navbarTogglerDemo01">
        <ul class="navbar-nav">
          <li class="nav-item li-menu-principal">
            <a class="nav-link {{ activeMenu('/') }}" href="{{ route('home') }}">INICIO</a>
          </li>
          <li class="nav-item li-menu-principal">
            <a class="nav-link {{ activeMenu('manifiestos') }}" href="{{ route('manifiestos') }}">MANIFIESTOS</a>
          </li>
          <li class="nav-item li-menu-principal">
            <a class="nav-link {{ activeMenu('quienesSomos') }}" href="{{ route('quienes_somos') }}">QUIENES SOMOS</a>
          </li> 
          <li class="nav-item li-menu-principal">
            <a class="nav-link {{ activeMenu('contacto') }}" href="{{ route('contacto') }}">CONTACTO</a>
          </li>
          <?php if(!isset($_SESSION['nick_usuario'])){ ?> <!-- Si no hay session -->
                <li class="nav-item">
                    <a class="btn btn-dark bg-primary" role="button" href="{{ route('acceder') }}">ACCEDER</a>
                </li>
          <?php } if(($tipo_usuario) && $tipo_usuario == 'Admin'){ ?> 
          <!-- Si la session es de tipo usuario -->
                <li class="nav-item li-menu-principal">
                    <a class="nav-link {{ activeMenu('administrador') }}" href="{{ route('administrador') }}">ADMINISTRADOR</a>
                </li>
          <?php } if(isset($_SESSION['nick_usuario'])){ ?> <!-- Si hay session -->
                <form method='POST' action='{{ route('desconectar') }}' >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class='btn btn-danger' name='desconectar' type="submit"> DESCONECTAR </button>
                </form>
          <?php } ?>
        </ul>
      </section> 
    </nav>
</header>

<main>
 @yield('contenido')
</main>

<footer class="page-footer font-small unique-color-dark">
  <header id="header-footer">
    <section class="container">
      <article class="row py-4 d-flex align-items-center">
        <aside class="col-md-7 col-lg-6 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"> ¡Accede a nuestras redes sociales para saber más de nosotros!</h6>
        </aside>
        <aside class="col-md-5 col-lg-6 text-center text-md-right">
          <!-- Facebook -->
          <a id="icono-redes-sociales-footer" class="p-2" href="https://es-es.facebook.com/LGTBCREVILLENT/" class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="text-white icono-redes-sociales-footer" href="https://twitter.com/crevillentlgtb?lang=es" class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="text-white icono-redes-sociales-footer" href="https://plus.google.com/107742714242312412984" class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="text-white icono-redes-sociales-footer" href="" class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>
        </aside>
      </article>
    </section>
  </header>

  <section class="container text-center text-md-left mt-5">
    <section class="row mt-3">
      <section class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Asociación</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>LGTBCREVILLENT</p>
      </section>

      <section class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Terminos legales</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><a href="{{ route('home') }}">Inicio</a></p>
        <p><a href="{{ route('manifiestos') }}">Manifiestos</a></p>
        <p><a href="{{ route('quienes_somos') }}">Quienes somos</a></p>
        <p><a href="{{ route('contacto') }}">Contacto</a></p>
      </section>

      <section class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><a href="{{ route('home') }}">Inicio</a></p>
        <p><a href="{{ route('manifiestos') }}">Manifiestos</a></p>
        <p><a href="{{ route('quienes_somos') }}">Quienes somos</a></p>
        <p><a href="{{ route('contacto') }}">Contacto</a></p>
        </p>
      </section>

      <section class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><i class="fas fa-home mr-3"></i> Plaça Dr. Mas Candela, 15, 03330 Crevillent, Alacant</p>
        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </section>
    </section>
  </section>

  <aside class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> lgtbcrevillent.com </a>
  </aside>
</footer>
</section>
<!-- SCRIPT PAR APP -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>
  $('#header-footer').addClass('header-footer'); //Header en lila

  $("#icono-redes-sociales-footer").hover( //Si hacemos hover en un icono de redes sociales
    function(){ // Mouse Over
      $('#header-footer').removeClass("header-footer"); //quitamos clase header lila
    },
    function(){ // Mouse Out
      $('#header-footer').addClass("header-footer"); //añadimos clase header lila (como al principio)
    }
  );
</script>

<!-- CAMBIAR CONTRASEÑA OLVIDADA -->
<script type="text/javascript" src="{{ asset('js/Usuarios/btnCambiarContraseña.js') }}"></script>
</body>
</html>
