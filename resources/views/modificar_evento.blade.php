@extends('administrador')
@section('formularios')
<div class="" id="resultado_seleccionar_evento"></div>
<div class="" id="prueba"></div>
<form enctype=”multipart/form-data” action="{{ url('/administrador/evento_modificado') }}" id="form_modificar_evento" name="form_modificar_evento" method="POST">
    <h3 class="titulo-formulario p-3"> Modificar eventos</h3>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id_evento" value="{{ $evento->id }}">
    <div class="form-group">
      <input type="text" class="form-control" id="titulo_evento" name="titulo_evento" placeholder="Titulo del evento" value="{{ $evento->titulo }}" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="localidad_evento" name="localidad_evento" placeholder="Localidad. Ej. Crevillente" value="{{ $evento->localidad }}" required>
    </div>

    <div class="form-group">
      <textarea class="form-control" rows="5" name="texto_evento" id="texto_evento" placeholder="Texto del evento" required>{{ $evento->texto }}</textarea>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="lugar_evento" name="lugar_evento" placeholder="Lugar del evento. Ej. Casa de cultura" value="{{ $evento->lugar }}" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="direccion_evento" name="direccion_evento" placeholder="Direccion del evento. Ej. C/ Blasco Ibañez nº2" value="{{ $evento->direccion }}" required>
    </div>

    <div class="form-group">
      <input type="tel" class="form-control" id="telefono_evento" name="telefono_evento" placeholder="Telefono. Ej. 617423859" value="{{ $evento->telefono }}" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="horario_evento" name="horario_evento" placeholder="Horario. Ej. 16:00 a 20:00" value="{{ $evento->horario }}" required>
    </div>

    <div class="form-group">
      <input type="datetime" class="form-control" id="fecha_evento" name="fecha_evento" placeholder="Fecha" value="<?= date('Y/m/d H:i'); ?>" disabled>
    </div>

    <div id="imagen_evento">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="imagen" name="imagen">
        <!--<input type="hidden" name="imagen_evento" value="">-->
        <label id="label_imagen_evento" class="custom-file-label" for="imagen_evento">{{ $evento->imagen }}</label>
      </div>
    </div>
    <div class="" id="resultado_modificar_evento"></div>
    <div class="mt-3 w-100">
      <button type="submit" class="btn btn-primary float-right mb-3"> Modificar evento</button>
    </div>
</form>
@stop