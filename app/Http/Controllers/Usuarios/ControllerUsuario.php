<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Usuarios\ModelUsuario;

use App\Http\Models\Provincias\ModelProvincia;

use App\Http\Models\Municipios\ModelMunicipio;

class ControllerUsuario extends Controller
{
    public function RouteAcceder()
    {
    	$usuarios = ModelUsuario::all();
		return view('acceder', ['usuarios' => $usuarios]);
    }

    public function RouteRegistrarse()
    {
    	$provincias = ModelProvincia::all();
    	return view('registrarse', ['provincias' => $provincias]);
    }

    public function Provincia(Request $request)
    {
    	$municipios = ModelMunicipio::where('provincia_id' , $request->input('provincia'))->get();
    	$devuelve = $municipios;
    	return $devuelve;
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

    public function Registrarse(Request $request){
        $devuelve['ok']=0;
        if(trim($request->input('nick')) != '' && trim($request->input('nombre_apellidos')) != ''&& trim($request->input('email')) != '' && trim($request->input('pass')) != "" && trim($request->input('pass2')) != '' && trim($request->input('provincia')) != '' && trim($request->input('municipios')) != '' && trim($request->input('fechaNaci')) != '')
        {
            if($request->input('pass') == $request->input('pass2'))
            {
                $existe_email = ModelUsuario::Where('email', $request->input('email'))->first();
                if(!$existe_email['email'])
                {  
                    $nuevo_usuario = new ModelUsuario();
                    $nuevo_usuario->nick=$request->input('nick');
                    $nuevo_usuario->nombre_completo=$request->input('nombre_apellidos');
                    $nuevo_usuario->email=$request->input('email');
                    $nuevo_usuario->password=$request->input('pass');
                    $nuevo_usuario->provincia=$request->input('provincia');
                    $nuevo_usuario->municipio=$request->input('municipios');
                    $nuevo_usuario->fecha_nacimiento=$request->input('fechaNaci');
                    $nuevo_usuario->tipo='Estandar';
                    $nuevo_usuario->save(); //guardamos en la base de datos
                    $devuelve['ok'] = 1; //Devuelve que no existe en la bdd y se puede registrar

                    //creamos la session del Registro
                    $_SESSION['nick_usuario'] = $request->input('nick');
                    $_SESSION['tipo_usuario'] = 'Estandar';
                }
                else
                {
                    $devuelve['ok'] = 0; //Existe el email y error
                }
            }
            else
            {
                $devuelve['ok'] = 2; //Error
            }        
        }
        else
        {
            $devuelve['ok'] = 2; //Error
        }
        return $devuelve; 
    }
}
