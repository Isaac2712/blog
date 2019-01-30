<?php

namespace App\Http\Controllers\Noticias;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Noticias\ModelNoticia;

class ControllerNoticia extends Controller
{
    public function Noticias(){
    	$noticias = ModelNoticia::all();
		return view('home', ['noticias' => $noticias]);
    }
}
