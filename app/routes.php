<?php

Route::resource('navieras', 'NavierasController');
Route::get('usuarios/clientes', 'UsuarioController@clientes');
Route::get('usuarios/clientes/aprobar/{id}', 'UsuarioController@aprobarCliente');
Route::post('/usuarios/cambiarPasswordUsuario/{id}', 'UsuarioController@cambiarPasswordUsuario');
Route::resource('usuarios', 'UsuarioController');
Route::resource('proveedores', 'ProveedoresController');
Route::get('proveedores/api/productos/{id}', 'ProveedoresController@productos');
Route::resource('guias', 'GuiasController');
Route::resource('container', 'ContainerController');
Route::resource('companias', 'CompaniasController');
Route::resource('productos', 'ProductosController');
Route::get('pedidos/historial', 'PedidosController@historial');
Route::post('pedidos/finalizar/{id}', 'PedidosController@finalizar');
Route::resource('pedidos', 'PedidosController');
Route::get('recuperar', 'AuthController@getRecuperar');
Route::get('login', 'AuthController@getLogin');
Route::get('registro', 'AuthController@getRegistro');
Route::post('login', 'AuthController@postLogin');
Route::post('registro', 'AuthController@postRegistro');
Route::post('recuperar', 'AuthController@postRecuperar');


Route::post('documentos/upload', 'DocumentosController@postDropzone');
Route::get('documentos/upload/{id}', 'DocumentosController@getDropzone');
Route::get('documentos/{id}', 'DocumentosController@getDocuments');
Route::post('documentos/delete/{id}', 'DocumentosController@delete');

Route::get('showpdf/public/archivos/{id}/{nombre}', function($id, $nombre) {
    //$file = 'public/archivos/32342.pdf';  // <- Replace with the path to your .pdf file
    $file = 'public/archivos/'.$id.'/'.$nombre;
    // check if the file exists
    if (file_exists($file)) {
        // read the file into a string
        $content = file_get_contents($file);
        // create a Laravel Response using the content string, an http response code of 200(OK),
        //  and an array of html headers including the pdf content type
        return Response::make($content, 200, array('content-type' => 'application/pdf'));
    }else{
        return Response::make("No tiene permiso para estar aca!", 404);
    }
});
Route::get('showOtpdf/public/archivos/{id}/otros/{nombre}', function($id, $nombre) {
    //$file = 'public/archivos/32342.pdf';  // <- Replace with the path to your .pdf file
    $file = 'public/archivos/'.$id.'/otros/'.$nombre;
    // check if the file exists
    if (file_exists($file)) {
        // read the file into a string
        $content = file_get_contents($file);
        // create a Laravel Response using the content string, an http response code of 200(OK),
        //  and an array of html headers including the pdf content type
        return Response::make($content, 200, array('content-type' => 'application/pdf'));
    }else{
        return Response::make("No tiene permiso para estar aca!", 404);
    }
});

Route::group(array('before' => 'auth'), function() {
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function() {
        $tipo = Auth::user()->tipo_usuario;

        if ($tipo == "ADMINISTRADOR" || $tipo == "DIGITADOR") {
            return View::make('index')->with('tipoUsuario', $tipo);
        }
        if ($tipo == "CLIENTE") {
            return View::make('mod_cliente.index');
        }
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@getLogout');
});

Route::get('/dashboard', function() {
    $numPedidos = Pedido::where('estado', '=', 'ACTIVO')->count();
    $numHistorial = Pedido::where('estado', '=', 'INACTIVO')->count();
    $pedidos = Pedido::all()->take(5);
    $ultimoAcceso = Auth::user()->ultimo_acceso;

    return View::make('dashboard')
                    ->with('numpedidos', $numPedidos)
                    ->with('numhistorial', $numHistorial)
                    ->with('pedidos', $pedidos)
                    ->with('ultimoAcceso', $ultimoAcceso);
});


Route::get('/mod_cliente/dashboard', function() {
    $numPedidos = 0;
    $usuario = Usuario::find(Auth::id());
    $objPedidos = array();
    $ultimoAcceso = Auth::user()->ultimo_acceso;

    foreach ($usuario->companias as $compania) {
        foreach ($compania->pedidos as $pedido) {
            if ($pedido->estado == 'ACTIVO') {
                $numPedidos++;
                $objPedidos[] = $pedido;
            }
        }
    }

    return View::make('mod_cliente.dashboard')
                    ->with('pedidos', $objPedidos)
                    ->with('numpedidos', $numPedidos)
                    ->with('ultimoAcceso', $ultimoAcceso);
});

Route::post('/perfil/cambiarPassword', 'PerfilAdminController@cambiarPassword');
Route::post('/mod_cliente/perfil/cambiarPassword', 'PerfilClienteController@cambiarPassword');
Route::get('/mod_cliente/pedidos', 'PedidosClienteController@pedidos');
Route::get('/mod_cliente/historial', 'PedidosClienteController@historial');
Route::resource('/mod_cliente/companias', 'CompaniasClienteController');
Route::resource('/mod_cliente/perfil', 'PerfilClienteController');
Route::resource('/perfil', 'PerfilAdminController');







Route::get('/download/{id}', function($id) {
    $guia = Guia::find($id);

    return Response::download($guia->url_archivo);
});
Route::get('/api/paises/{id}', function($id) {
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

