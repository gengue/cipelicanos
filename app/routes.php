<?php

Route::resource('naviera', 'NavieraController');
Route::resource('proveedores', 'ProveedoresController');
Route::resource('guias', 'GuiasController');

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

