@extends('administrador')
@section('formularios')
<form enctype="multipart/form-data" action="{{route('modificar')}}" id="form_select_modificar_evento" method="POST">
  <h3 class="titulo-formulario p-3"> Selecciona el evento que quieres modificar</h3>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <!-- Seccion select -->
  <section class="input-group w-50 m-auto pt-2">
    <select class="custom-select" id="select_modificar_evento" name="select_modificar_evento">
      <option value='' selected>Selecciona alguno...</option>
      <?php
        for($i=0; $i < count($eventos); $i++){
          $id_evento = $eventos[$i]['id'];
          $titulo_evento = $eventos[$i]['titulo'];
          echo "<option id='evento' value='{$titulo_evento}'>$titulo_evento</option>";
        }
      ?>
    </select>
    <!-- Seccion boton -->
    <section class="input-group-append">
          <button class="btn btn-outline-primary" type="submit">modficar</button>
    </section>
    <span class="w-100" id="boton_modificar"></span>
  </section>
  <!-- /FIN seccion boton --> 
</form>
@stop