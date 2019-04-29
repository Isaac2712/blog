function btnCambiarContraseña()
{
	
	var id_usuario = jQuery("[name=id_usuario]").val();
	var contraseña = jQuery("[name=contraseña]").val();
	var contraseña2 = jQuery("[name=contraseña2]").val();
	var _token = jQuery("[name=_token]").val();

	var distintas = false;

	if(contraseña == '')
	{
		$('#contraseña_1').removeClass("input-registro-ok"); 
    	$('#contraseña_1').addClass("input-registro-vacio");
	}
	else
	{
	    $('#contraseña_1').addClass("input-registro-ok"); //Añadimos la clase del input relleno
	}

	if(contraseña2 == '')
	{
		$('#contraseña_2').removeClass("input-registro-ok"); 
    	$('#contraseña_2').addClass("input-registro-vacio");
	}
	else
	{
	    $('#contraseña_2').addClass("input-registro-ok"); //Añadimos la clase del input relleno
	}

	//Si las contraseñas son distintas
	if(contraseña != contraseña2)
	{
		$('#contraseñas_distintas').html("<div style='font-size: 12px;' class='alert alert-danger mt-0 w-100' role='alert' id='contraseñas_distintas'> Las contraseñas son distintas. </div>").show().delay(1000).fadeOut("fast");
		distintas = true;
	}

	var datos = {
				 'id_usuario':id_usuario,
				 'contraseña':contraseña,
				 'contraseña2':contraseña2,
				 '_token':_token
				}

	if(distintas == false)
	{
		$.ajax({
	      async: true,
	      type: "POST",
	      dataType: "json",
	      contentType: "application/x-www-form-urlencoded",
	      url: "/ajax/cambiarContraseña",
	      data: datos,
	      success: function(respuesta) {
	        //console.log(respuesta);
	        if(respuesta.ok == 1)
	        {
	         $('#resultado_cambiar_contraseña').html("<br><div class='alert alert-danger mt-0 w-100' role='alert' id='resultado_cambiar_contraseña' > Has cambiado la contraseña </div>").show().delay(3000).fadeOut("fast");
	         setTimeout("location.href='/'", 5000);
	        }
	      },
	      error: function() {
	      }
	  	});
	}
	return false;
}