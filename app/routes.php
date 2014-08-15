<?php


Route::resource('navieras', 'NavierasController');
Route::get('usuarios/clientes', 'UsuarioController@clientes');
Route::get('usuarios/clientes/aprobar/{id}', 'UsuarioController@aprobarCliente');
Route::resource('usuarios', 'UsuarioController');
Route::resource('proveedores', 'ProveedoresController');
Route::resource('guias', 'GuiasController');
Route::resource('container', 'ContainerController');
Route::resource('companias', 'CompaniasController');
Route::resource('productos', 'ProductosController');
Route::resource('pedidos', 'PedidosController');

Route::get('/', function()
{
    //return View::make('login');
    return View::make('index');
});

Route::get('/dashboard', function()
{
    return View::make('dashboard');
});


Route::get('/download/{id}', function($id){
    $guia = Guia::find($id);
    
    return Response::download($guia->url_archivo);
});
Route::get('/registro', function()
{
    return View::make('registro');
});

