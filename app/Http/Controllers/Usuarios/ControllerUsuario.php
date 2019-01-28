<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Usuarios\ModelUsuario;

class ControllerUsuario extends Controller
{
    public function RouteAcceder(){
    	$usuarios = ModelUsuario::all();
		return view('acceder', ['usuarios' => $usuarios]);
    }

    public function Acceder(){
    	$devuelve['ok']=0;
    	//AQUI COMPROBAMOS DATOS INTRODUCIDOS EN ACCEDER
    	return $devuelve;
    }
}
