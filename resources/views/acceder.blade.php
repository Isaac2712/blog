<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LGTBCREVILLENT</title>
        <link rel="icon" href="{{ asset('imagenes/LOGO.jpg') }}" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="container bg-dark text-white mt-3">
    <?php if(!isset($_SESSION['nick_usuario'])){ ?>
        <section id="app" class="col-md-7 col-lg-5 m-auto">
            <header class="mb-3">
                <img class="card-img-top" src="imagenes/LOGO.jpg" title="Inicio"/>
            </header>
            <main>
                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label> Usuario </label>
                        <input type="text" id="nick" name="nick" class="form-control">
                        <div id="div_nick_vacio"></div>
                    </div>
                    <div class="form-group">
                        <label> Contraseña </label>
                        <input type="password" id="pass" name="pass" class="form-control">
                        <div id="div_pass_vacio"></div>
                    </div>
                    <button onclick="return btnAcceder()" name="acceder" class="btn btn-primary btn-block"> Acceder </button>
                    <div id="resultado"></div>
                </form> 
                <a href=""> ¿Todavía no te has registrado? </a>   
            </main> 
        </section>
        <footer style="margin-top:100px;">
            <nav class="navbar navbar-expand-sm fixed-bottom navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('home') }}">LGTBCREVILLENT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex-lg justify-content-sm-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active" aria-current="page">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Reivindicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div> 
            </nav>
        </footer>
    <?php } ?>
    </body>  
</html>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<!-- BOTON ACCEDER A LA WEB -->
<script type="text/javascript" src="{{ asset('js/btnAcceder.js') }}"></script>

