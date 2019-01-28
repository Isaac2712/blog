function btnAcceder(){
  var nick=jQuery("[name=nick]").val();
  var pass=jQuery("[name=pass]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = {'nick':nick, 'pass':pass, '_token':_token };

  console.log(datos);

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
      console.log(respuesta);
      if(respuesta.ok==1)
      {
        location.reload();
      }
      else
      {
        jQuery('#resultado').html("<br><div id='resultado' class=''> Ese usuario no existe </div>");
      }
    },
    timeout:3000,
    error:function(error)
    {
      alert(error);
      jQuery('#resultado').html("<br><div id='resultado' class=''> Internal Server Error </div>");
    }
  });

  return false; //siempre
}
