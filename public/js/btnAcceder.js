function btnAcceder(){
  var nick=jQuery("[name=nick]").val();
  var pass=jQuery("[name=pass]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = {'nick':nick, 'pass':pass, '_token':_token };

  //console.log(datos);

  if(nick == '')
  {
    $('#div_nick_vacio').html("<br><div class='alert alert-danger' role='alert' id='div_nick_vacio'> El nick no puede estar vacio </div>");
  }

  if(pass == '')
  {
    $('#div_pass_vacio').html("<br><div class='alert alert-danger' role='alert' id='div_pass_vacio'> La contraseña no puede estar vacia </div>");
  }

  $.ajax({
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
      //console.log(respuesta);
      if(respuesta.ok==1)
      {
        window.location.href = '/';
      }
      else
      {
        $('#resultado').html("<br><div class='alert alert-danger' role='alert' id='resultado'> Ese usuario no existe </div>");
      }
    },
    timeout:3000,
    error:function(error)
    {
      $('#resultado').html("<br><div class='alert alert-danger' role='alert' id='resultado' > Internal Server Error </div>");
    }
  });

  return false; //siempre
}
