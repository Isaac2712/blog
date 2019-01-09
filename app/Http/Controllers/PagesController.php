<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function RouteHome(){
    	return view('home');
    }

    public function RouteContacto(){
    	return view('contacto');
    }

    public function RouteSaludo(){
    	return view('saludo');
    }

    public function Form(Request $request){
    	return $request->all();
    }
}
