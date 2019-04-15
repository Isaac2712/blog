function btnModificarEvento(){
	var id_evento = jQuery("[name=id_evento]").val();
	var titulo_evento=jQuery("[name=titulo_evento]").val();
	var localidad_evento=jQuery("[name=localidad_evento]").val();
	var texto_evento=jQuery("[name=texto_evento]").val();
	var lugar_evento=jQuery("[name=lugar_evento]").val();
	var direccion_evento=jQuery("[name=direccion_evento]").val();
	var telefono_evento=jQuery("[name=telefono_evento]").val();
	var horario_evento=jQuery("[name=horario_evento]").val();
	var fecha_evento=jQuery("[name=fecha_evento]").val();
	var _token = jQuery("[name=_token]").val();


	var formData = new FormData();
	formData.append('_token', _token);
	formData.append('titulo_evento', titulo_evento);
	formData.append('localidad_evento', localidad_evento);
	formData.append('texto_evento', texto_evento);
	formData.append('lugar_evento', lugar_evento);
	formData.append('telefono_evento', telefono_evento);
	formData.append('horario_evento', horario_evento);
	formData.append('fecha_evento', fecha_evento);
	formData.append('direccion_evento', direccion_evento);
	var file = jQuery('.custom-file-input');
	formData.append("file", file[0].files[0]);

	$.ajax({
       	type: "POST",
	    url: "/ajax/modificarEvento",
	    data: formData,
	    processData: false,
	    contentType: false,
	    success: function(respuesta) {
        if(respuesta.ok == 1)
        {
        	$('#resultado_modificar_evento').html("<br><div class='alert alert-success mt-0 w-100' role='alert' id='resultado_modificar_evento'> Se ha modificado el evento. </div>").show().delay(5000).fadeOut("fast");
        }
        else if(respuesta.ok == 2)
        {
        	$('#resultado_modificar_evento').html("<br><div class='alert alert-danger mt-0 w-100' role='alert' id='resultado_seleccionar_evento'> Imagen vacia </div>").show().delay(5000).fadeOut("fast");
        }
        else if(respuesta.ok == 3)
        {
        	$('#prueba').html("<p> Si llega la imagen </p>");
        }
      },
      error: function() {
      }
 	});
	
	return false;
}