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

//Desconectar
Route::post('/desconectar', ['as' => 'desconectar' , 'uses' => 'Usuarios\ControllerUsuario@Desconectar']);

//Pagina para acceder
Route::get('/acceder', ['as' => 'acceder', 'uses' => 'Usuarios\ControllerUsuario@RouteAcceder']);

//Pagina para acceder
Route::get('/registrarse', ['as' => 'registrarse', 'uses' => 'Usuarios\ControllerUsuario@RouteRegistrarse']);

//Ajax acceder
Route::post('/ajax/acceder', 'Usuarios\ControllerUsuario@Acceder');

//Ajax provincia
Route::post('/ajax/provincia', 'Usuarios\ControllerUsuario@Provincia');

//Ajax registro
Route::post('/ajax/registrarse', 'Usuarios\ControllerUsuario@Registrarse');

//Ruta del menu -> contacto
Route::get('contacto', ['as' => 'contacto', 'uses' => 'PagesController@RouteContacto']);

Route::POST('contacto', 'PagesController@Form');

//Ruta del menu -> manifiestos

Route::get('manifiestos', ['as' => 'manifiestos', 'uses' => 'PagesController@RouteManifiestos']);

//Ruta del menu -> quienes somos

Route::get('quienesSomos', ['as' => 'quienes_somos', 'uses' => 'PagesController@RouteQuienesSomos']);

//Ruta a la información del evento

Route::get('/{evento}', 'PagesController@RouteInfoEventos');