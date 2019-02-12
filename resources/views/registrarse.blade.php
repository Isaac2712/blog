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
    <section id="app" class="col-lg-10 m-auto">
        <h1 class="text-center mb-4"> Registrate para lgtbCrevillent </h1>
        <form method="POST" action="" class="form-registro row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="nick"> Nick del usuario </label>
                <input type="text" value="" class="form-control" id="nick" name="nick" placeholder="lgtb_usuario">
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="nombre_apellidos"> Nombre y Apellidos </label>
                <input type="text" value="" class="form-control" id="nombre_apellidos" name="nombre_apellidos" placeholder="Nombre y apellidos">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label" for="email"> Dirección de Correo Electrónico </label>
                <input type="email" value="" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="pass"> Contraseña </label>
                <input type="password"  value="" class="form-control" id="pass" name="pass" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="pass2"> Repetir contraseña </label>
                <input type="password"  value="" class="form-control" id="pass2" name="pass2" placeholder="Repetir contraseña">
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="prov"> Provincia </label>
                <select onchange="return Provincia()" class='form-control' name='provincia' id='selectProvincia'>
                    <option value="" disabled selected>Selecciona una provincia </option>
                <?php for($i=0;$i<count($provincias);$i++)
                        { 
                            $idprov = $provincias[$i]['id'];
                            $prov = $provincias[$i]['provincia'];
                ?>
                          <option value='<?= $idprov ?>'><?= $prov ?></option>
                <?php 
                        } 
                ?>
                </select>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="municipio"> Municipio </label> <br>
                <select class='form-control' id="municipios">
                    <option value="" disabled selected> Selecciona un municipio </option>
                </select>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label" for="fechaNaci"> Fecha de nacimiento </label> <br>
                <input type="date" id="fechaNaci" value="" class="form-control" name="fechaNaci">
            </div>   
            
            <div class="col-md-12 col-lg-6">
                <input type="hidden" id="sexo" name="sexo" value="">
                <div class="form-check radio-regi">
                    <label><input class="form-check-input" name="sexo" value="Mujer" type="radio">Mujer </label>
                </div> 
                <div class="form-check radio-regi">
                    <label><input class="form-check-input" name="sexo" value="Hombre" type="radio"> Hombre </label>
                </div>
            </div>
            <div class="checkbox politica">
                <div class="col-md-12">
                    <input type="checkbox" class="" name="politica" id="politica" autocomplete="" checked />
                    <div class="btn-group">
                        <label for="politica" class="btn btn-default">
                            <span class="fa fa-check-square-o fa-lg"></span>
                            <span class="fa fa-square-o fa-lg"></span>
                            <span class="content"> Sí, acepto la <a href="politicaPrivacidad.php"> política de privacidad </a> de lgtbCrevillent </span>
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" name="registrarse" class="btn btn-primary btn-block"> Registrarse </button>
        </form>
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
                        <a class="nav-link" href="{{ route('manifiestos') }}">Manifiestos</a>
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
</body>
</html>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<!-- MOSTRAR PROVINCIAS -->
<script type="text/javascript" src="{{ asset('js/Provincias.js') }}"></script>