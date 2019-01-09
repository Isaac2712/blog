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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@RouteHome']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'PagesController@RouteContacto']);

Route::POST('contacto', 'PagesController@Form');

Route::get('saludo', ['as' => 'saludo', 'uses' => 'PagesController@RouteSaludo']);