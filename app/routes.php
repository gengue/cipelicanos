<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('naviera', 'NavieraController');
Route::resource('proveedores', 'ProveedoresController');

Route::resource('container', 'ContainerController');

Route::get('/', function()
{
	//return View::make('hello');
    return View::make('login');
});

Route::get('/registro', function()
{
	//return View::make('hello');
    return View::make('registro');
});
 Route::get('/prueba', function(){
     $compa = new Container();
     $compa->numero_container = 'jasd';
     $compa->save();
     return 'datos guardados correctamente';
 });
