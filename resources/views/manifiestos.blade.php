@extends('layout')
@section('contenido')
<body>
<section class="container mt-3">
    <header class="container-fluid">
        <main class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h2-title"> MANIFIESTOS </h2>
                <hr class="hr-title">
            </div>
        </main>
    </header>
    <main class="container-fluid">
        <article>       
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