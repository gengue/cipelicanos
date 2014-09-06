<?php


Route::resource('navieras', 'NavierasController');
Route::get('usuarios/clientes', 'UsuarioController@clientes');
Route::get('usuarios/clientes/aprobar/{id}', 'UsuarioController@aprobarCliente');
Route::resource('usuarios', 'UsuarioController');
Route::resource('proveedores', 'ProveedoresController');
Route::get('proveedores/api/productos/{id}', 'ProveedoresController@productos');
Route::resource('guias', 'GuiasController');
Route::resource('container', 'ContainerController');
Route::resource('companias', 'CompaniasController');
Route::resource('productos', 'ProductosController');
Route::get('pedidos/historial', 'PedidosController@historial');
Route::resource('pedidos', 'PedidosController');

Route::get('login','AuthController@getLogin');
Route::get('registro','AuthController@getRegistro');
Route::post('login','AuthController@postLogin');
Route::post('registro','AuthController@postRegistro');

Route::post('upload', 'DocumentosController@postDropzone');

Route::get('cruds', function(){
 return View::make('cruds');   
});

Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('index');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout','AuthController@getLogout');
});

Route::get('/dashboard', function()
{
    return View::make('dashboard');
});


Route::get('/download/{id}', function($id){
    $guia = Guia::find($id);
    
    return Response::download($guia->url_archivo);
});
Route::get('/api/paises/{id}', function($id){
    $ciudades = Country::find($id)->ciudades;
    return Response::json($ciudades);
});

//Route::get('/registro', function()
//{
//    $paises = Country::lists('nombre','Code');
//    return View::make('registro')->with('paises', $paises);
//});
//
//Route::get('/login', function()
//{
//    return View::make('login');
//});

