<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('contacto', ['as' => 'contacto', function(){
	return view('contacto');
}]);

Route::get('saludo', ['as' => 'saludo', function(){
	return view('contacto');
}]);
