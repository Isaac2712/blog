<?php

namespace App\Http\Controllers\Eventos;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Eventos\ModelEvento;

class ControllerEvento extends Controller
{

	public function anadirEvento(Request $request)
	{
		$devuelve['ok'] = 0;

		//Si ningun input esta vacio
		if(trim($request->input('titulo_evento')) != '' && trim($request->input('localidad_evento')) != ''&& trim($request->input('texto_evento')) != '' && trim($request->input('lugar_evento')) != "" && trim($request->input('direccion_evento')) != '' && trim($request->input('telefono_evento')) != '' && trim($request->input('horario_evento')) != '' && trim($request->input('fecha_evento')) != '')
        {
        	//Guardamos en la bdd el evento
        	$nuevo_evento = new ModelEvento();
            $nuevo_evento->titulo=$request->input('titulo_evento');
            $nuevo_evento->localidad=$request->input('localidad_evento');
            $nuevo_evento->texto=$request->input('texto_evento');
            $nuevo_evento->lugar=$request->input('lugar_evento');
            $nuevo_evento->direccion=$request->input('direccion_evento');
            $nuevo_evento->telefono=$request->input('telefono_evento');
            $nuevo_evento->horario=$request->input('horario_evento');
            $nuevo_evento->fecha=$request->input('fecha_evento');
            if ($request->hasFile('file')) //Si recibimos el file que es de la imagen
		    {
		      $file = $request->file('file');
		      $nombre = $file->getClientOriginalName();
		      $nuevo_evento->imagen=$file->getClientOriginalName();
		      $path = public_path('imagenes/Eventos/');
		      $file->move($path, $nombre);
		    }
            
            $nuevo_evento->save(); //guardamos en la base de datos
            $devuelve['ok'] = 1; //Devuelve 1 cuando no hay ningun input vacio y se guarda en la bdd
        }

	    return $devuelve;
	}
}
