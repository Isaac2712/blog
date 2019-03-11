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
                <img class='imagen-index' src="imagenes/LOGO.jpg" width="100px" height="50px" title="Inicio"/>
                <span class="title-nav ml-3"> LGTB Crevillent </span>
            </a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse d-flex-lg justify-content-lg-end" id="navbarTogglerDemo01">
            <ul class="navbar-nav">
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('/') }}" href="{{ route('home') }}">INICIO</a>
              </li>
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('manifiestos') }}" href="{{ route('manifiestos') }}">MANIFIESTOS</a>
              </li>
              <li class="nav-item li-menu-principal">
                <a class="nav-link {{ activeMenu('quienes_somos') }}" href="{{ route('quienes_somos') }}">QUIENES SOMOS</a>
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
                    <li class="nav-item">
                        <a class="nav-link {{ activeMenu('home') }}" href="{{ route('home') }}">ADMINISTRADOR</a>
                    </li>
              <?php } if(isset($_SESSION['nick_usuario'])){ ?> <!-- Si hay session -->
                    <form method='POST' action='{{ route('desconectar') }}' >
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

  <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #4B088A; color:white">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</section>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
