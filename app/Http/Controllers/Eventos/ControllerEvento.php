<?php

namespace App\Http\Controllers\Eventos;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Eventos\ModelEvento;

class ControllerEvento extends Controller
{
    public function Eventos(){
    	$eventos = ModelEvento::all();
		return view('home', ['eventos' => $eventos]);
    }
}
