function btnModificarEvento(){
	console.log("ok");
	var id_evento = jQuery("[name=id_evento]").val();
	var titulo_evento=jQuery("[name=titulo_evento]").val();
	var localidad_evento=jQuery("[name=localidad_evento]").val();
	var texto_evento=jQuery("[name=texto_evento]").val();
	var lugar_evento=jQuery("[name=lugar_evento]").val();
	var direccion_evento=jQuery("[name=direccion_evento]").val();
	var telefono_evento=jQuery("[name=telefono_evento]").val();
	var horario_evento=jQuery("[name=horario_evento]").val();
	var fecha_evento=jQuery("[name=fecha_evento]").val();
	var imagen_evento=jQuery("[name=nuevo_input_imagen]").val();
	var _token = jQuery("[name=_token]").val();

	var datos = {
				'_token':_token,
				'id_evento':id_evento,
				'titulo_evento':titulo_evento,
				'localidad_evento':localidad_evento,
				'texto_evento':texto_evento,
				'lugar_evento':lugar_evento,
				'direccion_evento':direccion_evento,
				'telefono_evento':telefono_evento,
				'horario_evento':horario_evento,
				'fecha_evento':fecha_evento,
				'imagen_evento':imagen_evento
				}

	console.log(id_evento);
	$.ajax({
      async: true,
      type: "POST",
      dataType: "json",
      contentType: "application/x-www-form-urlencoded",
      url: "/ajax/modificarEvento",
      data: datos,
      success: function(respuesta) {
      	//console.log(respuesta);
        if(respuesta.ok == 1)
        {
        	$('#resultado_modificar_evento').html("<br><div class='alert alert-success mt-0 w-100' role='alert' id='resultado_modificar_evento'> Se ha modificado el evento. </div>").show().delay(5000).fadeOut("fast");
        }
        else
        {
        	$('#resultado_seleccionar_evento').html("<br><div class='alert alert-danger mt-0 w-100' role='alert' id='resultado_seleccionar_evento'> No se han podido rellenar los input </div>").show().delay(5000).fadeOut("fast");
        }
      },
      error: function() {
      }
 	});
	
	return false;
}