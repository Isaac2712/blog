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
//PagesController es el controlador principal
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@RouteHome']);

//Mandamos a la pagina de inicio los eventos
Route::get('/', ['as' => 'home', 'uses' => 'Eventos\ControllerEvento@Eventos']);

//Mandamos a la pagina de inicio las noticias
//Route::get('/', ['as' => 'home', 'uses' => 'Noticias\ControllerNoticia@Noticias']);

//Desconectar
Route::post('/desconectar', ['as' => 'desconectar' , 'uses' => 'Usuarios\ControllerUsuario@Desconectar']);

//Pagina para acceder
Route::get('/acceder', ['as' => 'acceder', 'uses' => 'Usuarios\ControllerUsuario@RouteAcceder']);

//Ajax acceder
Route::post('/ajax/acceder', 'Usuarios\ControllerUsuario@Acceder');

Route::get('contacto', ['as' => 'contacto', 'uses' => 'PagesController@RouteContacto']);

Route::POST('contacto', 'PagesController@Form');

Route::get('saludo', ['as' => 'saludo', 'uses' => 'PagesController@RouteSaludo']);