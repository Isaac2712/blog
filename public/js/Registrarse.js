function Registrarse()
{
	var nick = jQuery("[name=nick]").val();
	var nombre_apellidos = jQuery("[name=nombre_apellidos]").val();
	var email = jQuery("[name=email]").val();
	var pass = jQuery("[name=pass]").val();
	var pass2 = jQuery("[name=pass2]").val();
	var provincia = jQuery("[name=provincia]").val();
	var municipios = jQuery("[name=municipios]").val();
	var fechaNaci = jQuery("[name=fechaNaci]").val();
	var _token = jQuery("[name=_token]").val();
	var vacio = false;

	if(nick == ""){
		$('#nick').addClass("input-registro-vacio");
		$('#div_nick').html("<aside class='mt-1 mb-0 alert alert-danger' role='alert'> Rellena el input del nick </aside>");
		vacio = true;
	} 
	else
	{
		$('#nick').addClass("input-registro-ok");
		$('#div_nick').html("");
		vacio = false;
	}

	var datos = {
					'nick':nick, 
					'nombre_apellidos':nombre_apellidos, 
					'email':email,
					'pass':pass,
					'pass2':pass2,
					'provincia':provincia,
					'municipios':municipios,
					'fechaNaci':fechaNaci, 
					'_token':_token 
				};

	console.log(datos);




	return false;
}