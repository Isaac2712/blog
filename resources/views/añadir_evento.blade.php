@extends('administrador')
@section('formularios')
<?php
	$nombrearchivo = ""; 
	$titulo = ""; 
	$localidad = ""; 
	$texto = ""; 
	$lugar = ""; 
	$direccion = "";  
	$telefono = ""; 
	$horario = "";  
	$fecha = ""; 
?>
<form enctype="multipart/form-data" action="#" name="form-añadir-eventos" method="POST">
    <h3 class="titulo-formulario p-3"> Insertar eventos</h3>
    <div class="form-group">
      <input type="text" class="form-control" id="tituloEven" name="tituloEven" placeholder="Titulo del evento" value="<?php echo $titulo; ?>" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="localidadEven" name="localidadEven" placeholder="Localidad. Ej. Crevillente" value="<?php echo $localidad; ?>" required>
    </div>

    <div class="form-group">
      <textarea class="form-control" rows="5" name="textoEven" id="textoEven" placeholder="Texto del evento" required><?php echo $texto; ?></textarea>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="lugarEven" name="lugarEven" placeholder="Lugar del evento. Ej. Casa de cultura" value="<?php echo $lugar; ?>" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="dirEven" name="dirEven" placeholder="Direccion del evento. Ej. C/ Blasco Ibañez nº2" value="<?php echo $direccion; ?>" required>
    </div>

    <div class="form-group">
      <input type="tel" class="form-control" id="telefonoEven" name="telefonoEven" placeholder="Telefono. Ej. 617423859" value="<?php echo $telefono; ?>" required>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="horarioEven" name="horarioEven" placeholder="Horario. Ej. 16:00 a 20:00" value="<?php echo $horario; ?>" required>
    </div>

    <div class="form-group">
      <input type="datetime-local" class="form-control" id="fechaEven" name="fechaEven" placeholder="Fecha" value="<?php echo $fecha; ?>" required>
    </div>

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile" name="imagenEven" required>
      <label class="custom-file-label" for="customFile">Selecciona la imagen</label>
    </div>

    <button type="submit" class="btn btn-primary mt-3 mb-2 float-right" name="enviarEven"> Guardar evento</button>
</form>
@stop