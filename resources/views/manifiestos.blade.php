@extends('layout')
@section('contenido')
<body>
<section class="container mt-3">
    <header class="col-12 col-md-11 col-lg-11">
        <main class="row">
            <div class="col-lg-12">
                <h2 class="h2-reivin"> MANIFIESTOS </h2>
                <hr>
            </div>
        </main>
    </header>
    <main class="col-12 col-md-11 col-lg-10">
        <article id="artReivi">       
            <?php 
            	for ($i = 0; $i < count($manifiestos); $i++ ){ 
            		$id_manifiesto = $manifiestos[$i]['id'];
            		$titulo_manifiesto = $manifiestos[$i]['titulo'];
            		$fecha_manifiesto = $manifiestos[$i]['fecha'];
            ?>
                <main class="col-12">                              
                    <?php ?>
                    <p class="card-text"> <a href="definitivopdf.php?id=<?= $id_manifiesto ?>" target="_blank"> <?= $titulo_manifiesto ?> </a> </p>
                    <p class="card-text fecha-reivi">  <i> <?= "<i>".$fecha_manifiesto."</i>"; ?>  </i> </p>
                </main>
        <?php 
                }  
        ?>
        </article>
    </main>
</section>
</body>
@stop