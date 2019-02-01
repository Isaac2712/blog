@extends('layout')
@section('contenido')
<!-- SECCION DE EVENTOS -->
<section class="container-fluid mt-3 mb-5">
    <header class="container-fluid">
        <main class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h2-title">Eventos</h2>
                <hr class="hr-title">
            </div>
        </main>
    </header>
    <main class="container-fluid">
        <article id="artEven" class="row">       
        <?php  
        	$totalEventos = "";
            if(isset($_GET['comienzo']))
            {
                $comienzo=$_GET['comienzo'];
            }else
            {
                $comienzo=0;
            }  
            $num = 4;
            /* RECOGEMOS DATOS DE LA BASE DE DATOS PARA MOSTRARLOS EN LA PÁGINA */
            for($i = 0; $i < count($eventos); $i++){
                $id_evento = $eventos[$i]['id'];
                $titulo_evento = $eventos[$i]['titulo'];
                $texto_evento = $eventos[$i]['texto'];
        ?>
        <!-- MOSTRAMOS DATOS EN LA PAGINA WEB -->
        <main class="col-lg-3 col-md-6 col-sm-6 text-center">  
            <section class="card bg-light">
                <form action="info-eventos.php" method="POST">
                    <input type='hidden' name='id' value='<?= $id_evento ?>'>
                    <header class="card-header"> 
                        <?php 
                            //Abrimos la carpeta Eventos
                            $directory="imagenes/Eventos/";
                            $dirint = dir($directory);
                            echo $eventos[$i]['imagen'];
                            while (($archivo = $dirint->read()) !== false) 
                            {

                                if($archivo == $eventos[$i]['imagen'])
                                { 
                            ?>
                                <a href="<?= $directory."/".$archivo?>" target="_blank">
                                <img class="card-img-top" src="<?php echo $directory."/".$archivo?>" title="<?= $archivo ?>">
                                </a>
                        <?php
                               }
                            }
                            $dirint->close();
                        ?> 
                    </header>   
                    <section class="card-body">
                        <p class="card-title"> <?= $titulo_evento ?> </p>
                        <p class="card-text"> 
                            <?php 
                                $textoEventoCorto = substr($texto_evento, 0, 50);
                                echo $textoEventoCorto;
                            ?> 
                        </p>
                        <button class='boton-even btn btn-primary' type="submit" name='verMas'>Ver más</button>
                    </section>       
                </form>
            </section>
        </main>
        <?php 
            } /* FIN RECOGER DATOS DE LA BBDD*/  
        ?>
        </article>
        <article class='paginado'>
        <?php
            /*
            if($comienzo>0)
            {
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo=".($comienzo-$num)."'> ANTERIOR </a>";
            }
            if($comienzo+$num<count($totalLineas2)){
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo=".($comienzo+$num)."'> SIGUIENTE </a>";
            } 
            */
        ?>
        </article>
    </main>
</section>
<!-- FIN SECCION DE EVENTOS -->

<!-- SECCION DE NOTICIAS -->
<section class="container-fluid mt-3 mb-5">
    <header class="container-fluid">
        <main class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h2-title">Noticias</h2>
                <hr class="hr-title">
            </div>
        </main>
    </header>
    <?php  
        $totalNoticias = "";
        if(isset($_GET['comienzo']))
        {
            $comienzo=$_GET['comienzo'];
        }
        else
        {
            $comienzo=0;
        }  
        $num = 4;
        /* RECOGEMOS DATOS DE LA BASE DE DATOS PARA MOSTRARLOS EN LA PÁGINA */
        for($i = 0; $i < count($noticias); $i++){
            $id_evento = $noticias[$i]['id'];
            $titulo_noticia = $noticias[$i]['titulo'];
            $enlace_noticia = $noticias[$i]['enlace'];
    ?>
        <main class="container-fluid mt-4">  
            <section class="card"> 
            <article class="card-body">
                <p class="card-title"> <?= $titulo_noticia ?> </p>
                <p class="card-text"> <?= $enlace_noticia ?> </p>
            </article>      
            <?php 
                //Abrimos la carpeta Noticias
                $directory="imagenes/Noticias/";
                $dirint = dir($directory);
                while (($archivo = $dirint->read()) !== false) 
                {
                    if($archivo == $noticias[$i]['imagen'])
                    { 
                ?>
                    <a href="<?= $directory."/".$archivo?>" target="_blank">
                    <img class="card-img-bottom" src="<?php echo $directory."/".$archivo?>" title="<?= $archivo ?>">
                    </a>
            <?php
                    }
                }
                $dirint->close();
            ?> 
            </section>
        </main>
    <?php 
        } /* FIN RECOGER DATOS DE LA BBDD*/  
    ?>
    <article class='paginado'>
    <?php
        /*
        if($comienzo2>0)
        {
            echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo2=".($comienzo2-$num2)."'> ANTERIOR </a>";
        }
        if($comienzo2+$num2<count($totalLineas2))
        {
            echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo2=".($comienzo2+$num2)."'> SIGUIENTE </a>";
        }
        */
    ?>
    </article>
</section>
<!-- FIN SECCION DE NOTICIAS -->
@stop
