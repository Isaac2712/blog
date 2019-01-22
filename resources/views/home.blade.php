@extends('layout')
@section('contenido')
	<main>
<!--    <form class="navbar-search pull-left">
             <input type="text" class="search-query" placeholder="Search">
        </form>-->

<section id="secEven">
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
            	/*$totalLineas2 = "";
                if(isset($_GET['comienzo'])){
                    $comienzo=$_GET['comienzo'];
                }else{
                    $comienzo=0;
                }  
                $num = 4;*/
                /* RECOGEMOS DATOS DE LA BASE DE DATOS PARA MOSTRARLOS EN LA PÁGINA */
                //$totalLineas2 = controller_evento::getAll(); //Necesitamos saber cuantas lineas hay
                //$todos = controller_evento::getAllLimit($comienzo, $num);
                //$eventos = count($todos)-1 ; //Se le resta uno porque empieza desde el final
                //for($i = 0; $i <=  $eventos; $i++){
            ?>
                <!-- MOSTRAMOS DATOS EN LA PAGINA WEB -->
                <main class="col-lg-3 col-md-6 col-sm-6 text-center">  
                    <div class="even-box">
                        <form action="info-eventos.php" method="POST">
                            <input type='hidden' name='id' value='<?php /*echo $todos[$i]['id'];*/ ?>'>
                            <span> 
                                <?php 
                                    //Abrimos la carpeta imgEventos
                                    //$directory="../img/imgEventos/";
                                    //$dirint = dir($directory);
                                    /*while (($archivo = $dirint->read()) !== false) {
                                        if($archivo == $todos[$i]['imagen']){ ?>
                                            <div class="thumbnail">
                                              <a href="<?php $directory."/".$archivo?>" target="_blank">
                                                <img class="imagen-even" src="<?php echo $directory."/".$archivo?>" title="<?php echo $archivo ?>">
                                              </a>
                                            </div>
                                <?php   }
                                    }
                                    $dirint->close();*/
                                ?> 
                            </span>   
                            <div class="titulo-texto">
                                <p class="card-text titulo"> <?php /*echo $todos[$i]['titulo']; */?> </p>
                                <p class="card-text texto-enlace"> 
                                    <?php /*$textoEventoCorto = substr($todos[$i]['texto'], 0, 50);
                                        echo $textoEventoCorto; */
                                    ?> 
                                </p>
                            </div>
                            <button class='boton-even btn btn-primary' type="submit" name='verMas'>Ver más</button>
                        </form>
                    </div>
                </main>
                <!-- FIN -->
        <?php 
               /* }  */ 
            /* FIN RECOGER DATOS DE LA BBDD*/  
        ?>
        </article>
        <article class='paginado'>
        <?php
            /*if($comienzo>0){
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo=".($comienzo-$num)."'> ANTERIOR </a>";
            }
            if($comienzo+$num<count($totalLineas2)){
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo=".($comienzo+$num)."'> SIGUIENTE </a>";
            } */
        ?>
        </article>
    </main>
</section>

<?php
//      CREAR TABLAS
//      $evento = new controller_evento();
//      $evento->createTable();
//      $usuario = new controller_usuario();
//      $usuario->createTable();
//      $noticia = new controller_noticia();
//      $noticia->createTable();
//      $usuario = new controller_usuario();
//      $usuario->createTable();
//      $reivindicaciones = new controller_reivindicaciones();
//      $reivindicaciones->createTable();
?>
<section id="secNot">
    <header class="container-fluid">
        <main class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h2-title">Noticias</h2>
                <hr class="hr-title">
            </div>
        </main>
    </header>
    <main class="container-fluid">
        <article class="row" id="artNoti"> 
            <?php  
              /*  if(isset($_GET['comienzo2'])){
                    $comienzo2=$_GET['comienzo2'];
                }else{
                    $comienzo2=0;
                }  
                $num2 = 4;
                /* RECOGEMOS DATOS DE LA BASE DE DATOS PARA MOSTRARLOS EN LA PÁGINA */
               /* $totalLineas = controller_noticia::getAll(); //Necesitamos saber cuantas lineas hay
                $todosNoti = controller_noticia::getAllLimit($comienzo2, $num2);
                $noticias = count($todosNoti)-1 ; //Se le resta uno porque empieza desde el final
                for($i = 0; $i <=  $noticias; $i++){ */
            ?>
                <!-- MOSTRAMOS DATOS EN LA PAGINA WEB -->
                <main class="col-lg-3 col-md-6 col-sm-6 text-center">  
                    <div class="noti-box">
                        <form action="info-noticias.php" method="POST">
                            <input type='hidden' name='id' value='<?php /*echo $todosNoti[$i]['id'];*/ ?>'>
                            <span> 
                                <?php                                  
                                    //Abrimos la carpeta imgEventos
                                  /*  $directory="../img/imgNoticias/";
                                    $dirint = dir($directory);
                                    while (($archivo = $dirint->read()) !== false) {
                                        if($archivo == $todosNoti[$i]['imagen']){ ?>
                                            <div class="thumbnail">
                                              <a href="<?php $directory."/".$archivo?>" target="_blank">
                                                <img class="imagen-noti" src="<?php echo $directory."/".$archivo?>" title="<?php echo $archivo ?>">
                                              </a>
                                            </div>
                                <?php   }
                                    }
                                    $dirint->close();*/
                                ?> 
                            </span>       
                            <div class="titulo-texto">
                                <p class="card-text titulo"> <?php /*echo $todosNoti[$i]['titulo'];*/ ?> </p>
                                <p class="card-text texto-enlace"> 
                                    <?php /*$textoEnlaceCorto = substr($todosNoti[$i]['enlace'], 0, 50); 
                                        echo "<a target='_blank' href='$textoEnlaceCorto;'>$textoEnlaceCorto;</a>";*/
                                    ?> 
                                </p>
                            </div>
                            <button class='boton-noti btn btn-primary' type="submit" name='verMas'>Ver más</button>
                        </form>
                    </div>
                </main>
                <!-- FIN -->
        <?php 
               /* }  
            /* FIN RECOGER DATOS DE LA BBDD*/
               /* if(isset($_POST['verMas'])){
                    echo "ok";
                }*/
        ?>
        </article>
        <article class='paginado'>
        <?php
          /*  if($comienzo2>0){
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo2=".($comienzo2-$num2)."'> ANTERIOR </a>";
            }
            if($comienzo2+$num2<count($totalLineas2)){
                echo "<a class='badge badge-primary' href='".$_SERVER['PHP_SELF']."?comienzo2=".($comienzo2+$num2)."'> SIGUIENTE </a>";
            } */
        ?>
        </article>
    </main>
</section>
</main>
@stop