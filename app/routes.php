<?php


Route::resource('navieras', 'NavierasController');

Route::resource('usuarios', 'UsuarioController');


Route::resource('proveedores', 'ProveedoresController');

Route::resource('guias', 'GuiasController');
Route::resource('container', 'ContainerController');
Route::resource('companias', 'CompaniasController');
Route::resource('productos', 'ProductosController');

Route::get('/', function()
{
    //return View::make('login');
    return View::make('cruds');
});

Route::get('crud', function()
{
    return View::make('cruds');
});


Route::get('/download/{id}', function($id){
    $guia = Guia::find($id);
    
    return Response::download($guia->url_archivo);
});
Route::get('/registro', function()
{
    return View::make('registro');
});

