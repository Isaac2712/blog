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

//Ruta al pdf de los manifiestos
Route::get('manifiesto/{manifiesto}', 'Manifiestos\ControllerManifiesto@GenerarPDF');	

//Ruta del menu -> quienes somos
Route::get('quienesSomos', ['as' => 'quienes_somos', 'uses' => 'PagesController@RouteQuienesSomos']);

//Ruta a error
Route::get('/error', ['as' => 'error', 'uses' => 'PagesController@RouteError']);

//Ruta a la parte ADMINISTRADOR de la web
Route::get('/administrador', ['as' => 'administrador', 'uses' => 'PagesController@RouteAdministrador']);

//Ruta para formulario añadir eventos
Route::get('/administrador/añadir_evento', ['as' => 'añadir_evento', 'uses' => 'PagesController@RouteAñadirEvento']);

//Ruta para formulario eliminar eventos
Route::get('/administrador/eliminar_evento', ['as' => 'eliminar_evento', 'uses' => 'PagesController@RouteEliminarEvento']);

//Ruta para formulario modificar eventos
Route::get('/administrador/modificar_evento', ['as' => 'modificar_evento', 'uses' => 'PagesController@RouteModificarEvento']);

//Ruta para seleccionar evento
Route::get('/administrador/modificar_evento/{id}', 'Eventos\ControllerEvento@seleccionarEvento');

//Ruta para modificar el evento seleccionado
Route::post('/administrador/evento_modificado', 'Eventos\ControllerEvento@modificarEvento');

//Ajax Añadir eventos
Route::post('/ajax/anadirEvento', 'Eventos\ControllerEvento@anadirEvento');

//Ajax Eliminar eventos
Route::post('/ajax/eliminarEvento', 'Eventos\ControllerEvento@eliminarEvento');

//Ruta a la información del evento
Route::get('/{evento}', 'PagesController@RouteInfoEventos');