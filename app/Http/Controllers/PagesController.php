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
    	$this->validate($request, [
    		'email_contacto' => 'required|email',
    		'password_contacto' => 'required'
    	]);

    	return $request->all();
    }
}
