@extends('administrador')
@section('formularios')
<form enctype="multipart/form-data" action="#" id="form_select_modificar_evento" method="POST">
  <h3 class="titulo-formulario p-3"> Selecciona el evento que quieres modificar</h3>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <!-- Seccion tabla -->
  <section class="table-responsive mt-4">
    <table class="table">
      <caption>Lista de eventos</caption>
      <thead class="table-primary">
        <tr>
          <th> # </th>
          <th> Id </th>
          <th> Titulo </th>
          <th> Fecha </th>
          <th> Boton </th>
        </tr>
      <thead class="thead-dark">
      <tbody>
      <?php
        for($i=0; $i < count($eventos); $i++){
      ?>
      <tr>
        <td> {{ ($i+1) }} </td>
        <td> {{ $eventos[$i]['id'] }} </td>
        <td> {{ $eventos[$i]['titulo'] }} </td>
        <th> {{ $eventos[$i]['fecha'] }} </th>
        <td> <a href="{{ url('/administrador/modificar_evento/'.$eventos[$i]['id']) }}" class="btn btn-outline-primary" role="button">editar</a> </td>
      </tr>
      <?php
        }
      ?>
      </tbody>
    </table>
    <span class="w-100" id="boton_modificar"></span>
  </section>
  <!-- /FIN seccion boton --> 
</form>
@stop