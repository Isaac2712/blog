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
<body class="container-fluid pl-5" style="background-color: #C2C0C0;">
  <section id="app">
    <header class="mt-5">
      <h3> Error al acceder a la página </h3>
    </header>

    <main class="pt-4">
      <p> Intenta  </p>
    </main>

    <footer class="pt-5">
       <figure class="figure">
        <img src="/imagenes/LOGO.jpg" class="figure-img img-fluid rounded" alt="LgtbCrevillent" width="40%">
        <figcaption class="figure-caption">LgtbCrevillent</figcaption>
      </figure>
    </footer>
  </section>
</body>
</html>
