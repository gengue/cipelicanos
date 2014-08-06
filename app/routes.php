<?php

Route::resource('naviera', 'NavieraController');

Route::resource('proveedores', 'ProveedoresController');
Route::resource('guias', 'GuiasController');

Route::resource('container', 'ContainerController');

Route::get('/', function()
{
    return View::make('login');
});
Route::get('/download/{id}', function($id){
    $guia = Guia::find($id);
    
    return Response::download($guia->url_archivo);
});
Route::get('/registro', function()
{
    return View::make('registro');
});

