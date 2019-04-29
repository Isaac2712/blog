@extends('layout')
@section('contenido')
<body>
<section class="container mb-5">
    <header class="container hover-titulo">
    <hr class="mt-5">
    <main class="row">
        <aside class="col-lg-12 text-center">
            <h2 class="h2-title"> manifiestos </h2>
            <hr class="hr-title">
        </aside>
    </main>
    <hr class="mb-5">
    </header>
    <main class="container-fluid">
        <article>       
        <?php 
        	for ($i = 0; $i < count($manifiestos); $i++ ){ 
        		$id_manifiesto = $manifiestos[$i]['id'];
        		$titulo_manifiesto = $manifiestos[$i]['titulo'];
        		$fecha_manifiesto = $manifiestos[$i]['fecha'];
        ?>
            <main class="col-12 p-2">                              
                <?php ?>
                <span class="card-text mr-2">  <i> <?= "<i>".$fecha_manifiesto."</i>"; ?>  </i> </span>
                <span class="card-text"> <a href="manifiesto/<?=$titulo_manifiesto?>" target="_blank"> <?= $titulo_manifiesto ?> </a> </span>
                
            </main>
        <?php 
            }  
        ?>
        </article>
    </main>
</section>
</body>
@stop