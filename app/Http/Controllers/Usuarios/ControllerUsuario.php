<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Usuarios\ModelUsuario;

class ControllerUsuario extends Controller
{
    public function RouteAcceder()
    {
    	$usuarios = ModelUsuario::all();
		return view('acceder', ['usuarios' => $usuarios]);
    }

    public function Acceder(Request $request)
    {
    	$devuelve['ok']=0;
    	//AQUI COMPROBAMOS DATOS INTRODUCIDOS EN ACCEDER
    	if (trim($request->input('nick')) != '' && trim($request->input('pass')) != '')
		{
			$usuario = ModelUsuario::Where('nick',$request->input('nick'))->Where('password',$request->input('pass'))->get();
			if ($usuario->count()>0)
			{
				$devuelve['ok']=1;
		        $_SESSION['nick_usuario'] = $request->input('nick');
		        $_SESSION['tipo_usuario'] = $usuario[0]['tipo'];
			}
			else
				$devuelve['ok']=0;
		}
		return $devuelve;
    }

    public function Desconectar()
	{
    	session_destroy();
    	return redirect('/');
    }
}
