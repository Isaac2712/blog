<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Eventos

use App\Http\Controllers\Eventos;

use App\Http\Models\Eventos\ModelEvento;

//Noticias

use App\Http\Controllers\Noticias;

use App\Http\Models\Noticias\ModelNoticia;

//Manifiestos

use App\Http\Controllers\Manifiestos;

use App\Http\Models\Manifiestos\ModelManifiesto;

class PagesController extends Controller
{
    public function RouteHome(){
        //Esta funcion manda los eventos y noticias a la pagina home (que es la principal)
        $eventos = ModelEvento::all();
        $noticias = ModelNoticia::all();
        return view('home', ['eventos' => $eventos,
                             'noticias' => $noticias
                            ]);
    }

    public function RouteManifiestos(){
        $manifiestos = ModelManifiesto::all();
        return view('manifiestos', ['manifiestos' => $manifiestos]);
    }

    public function RouteContacto(){
    	return view('contacto');
    }

    public function RouteInfoEventos($titulo_evento){
        $info_evento = ModelEvento::where('titulo', $titulo_evento)->get();
    	return view('info_eventos', ['info_evento' => $info_evento]);
    }

    public function RouteQuienesSomos(){
        return view('quienes_somos');
    }

    /*public function Form(Request $request){
    	$this->validate($request, [
    		'email_contacto' => 'required|email',
    		'password_contacto' => 'required'
    	]);

    	return $request->all();
    }*/
}
