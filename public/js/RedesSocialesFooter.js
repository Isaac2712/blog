//Header en lila
$('#header-footer').addClass('header-footer');

function RedesSocialesFooterHover()
{ 
	$('#header-footer').removeClass("header-footer"); //quitamos clase header lila
	return false;
}

function RedesSocialesFooterSinHover()
{ 
	$('#header-footer').addClass("header-footer"); //quitamos clase header lila
	return false;
}