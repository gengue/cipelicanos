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

Route::post('documentos/upload', 'DocumentosController@postDropzone');
Route::get('documentos/upload', 'DocumentosController@getDropzone');
Route::post('documentos/delete/{id}', 'DocumentosController@delete');

Route::get('cruds', function(){
 return View::make('cruds');   
});

Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        $tipo = Auth::user()->tipo_usuario;

        if( $tipo == "ADMINISTRADOR"){
            return View::make('index');    
        }
        if($tipo == "CLIENTE"){
            return View::make('mod_cliente.index');   
        }
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout','AuthController@getLogout');
});

Route::get('/dashboard', function()
{
    $numPedidos = Pedido::where('estado','=','ACTIVO')->count();
    $numHistorial = Pedido::where('estado','=','INACTIVO')->count();
    $numClientes = Usuario::where('estado', '=', 'INACTIVO')->count();
    $pedidos = Pedido::all()->take(5);

    return View::make('dashboard')
        ->with('numpedidos', $numPedidos)
        ->with('numhistorial', $numHistorial)
        ->with('numclientes', $numClientes)
        ->with('pedidos', $pedidos);
});


Route::get('/mod_cliente/dashboard', function(){
    
    $numPedidos = Pedido::with(array('compania' => function($query)
    {
        $query->where('usuario_id', Auth::id());

    }))->where('estado', 'ACTIVO')->count();
   

    $pedidos = Pedido::with(array('compania' => function($query)
    {
        $query->where('usuario_id', Auth::id())->take(5)->orderBy('created_at', 'desc');

    }))->get();

    return View::make('mod_cliente.dashboard')
        ->with('pedidos', $pedidos)
        ->with('numpedidos', $numPedidos);
});
Route::resource('/mod_cliente/companias', 'CompaniasClienteController');
Route::get('/mod_cliente/pedidos', 'PedidosClienteController@pedidos');
Route::get('/mod_cliente/historial', 'PedidosClienteController@historial');



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

