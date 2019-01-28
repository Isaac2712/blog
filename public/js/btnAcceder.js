function btnAcceder(){
  var nick=jQuery("[name=nick]").val();
  var pass=jQuery("[name=pass]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = { 'nick':nick, 'pass':pass, '_token':_token };

  jQuery.ajax({
    async: true,
    type: "POST",
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    url: "/ajax/acceder",
    data: datos,
    beforeSend:function()
    {
    },
    success:function(respuesta)
    {
      console.log(respuesta)
      if(respuesta.ok==2) //Si se añade el comentario
      {
        jQuery('#resultado_añadir_comentario').html("<br><div id='resultado_añadir_comentario' class='sc_infobox sc_infobox_style_success'> ¡Has añadido el comentario! </div>");
      }
      else if(respuesta.ok==1)
      {
        jQuery('#resultado_añadir_comentario').html("<br><div id='resultado_añadir_comentario' class='sc_infobox sc_infobox_style_error'> Tienes que registrarte para comentar. </div>");
      }
      else if(respuesta.ok==3)
      {
        jQuery("#resultado_añadir_comentario").html("<br><div id='resultado_añadir_comentario' class='sc_infobox sc_infobox_style_error'> Rellena los campos </div>");
      }
    },
    timeout:3000,
    error:function(error)
    {
      jQuery('#resultado_añadir_comentario').html("<br><div id='resultado_añadir_comentario' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
    }
  });

  return false; //siempre
}
