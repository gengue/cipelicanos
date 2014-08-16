<?php

class UsuarioController extends BaseController {


  
    public function index() {


        $usuarios = Usuario::all();
        return View::make('usuarios.index')
                        ->with('usuarios', $usuarios);

    
    }


    public function clientes() {
        
        $usuarios = Usuario::where('tipo_usuario','=','cliente')->get();
        $usuarios->pendientes = 'NO';
        
        foreach ($usuarios as $usuario){
            if($usuario->estado == 'INACTIVO'){
                $usuarios->pendientes = 'SI';
                break;
            }
        }
        
        return View::make('usuarios.indexClientes')
                        ->with('usuarios', $usuarios);
    }

    public function create() {
        return View::make('usuarios.create');
    }
 
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation

       if (Request::ajax()) {
            $rules = array(
            );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
        ));

        } else {
            // store
            $usuario = new Usuario;
            $usuario->nombre = Input::get('nombre');
            $usuario->password = Input::get('password');
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais = Input::get('pais');
            $usuario->ciudad = Input::get('ciudad');
            $usuario->tipo_usuario = Input::get('tipo_usuario');
            $usuario->save();    
                
            // redirect

            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }}

  
    public function show($id) {
        // get the nerd
        $usuario = Usuario::find($id);

        // show the view and pass the nerd to it
        return View::make('usuarios.show')
                        ->with('usuarios', $usuario);
    }

  
    public function edit($id) {
    
        $usuario = Usuario::find($id);

        return View::make('usuarios.edit')
                        ->with('usuarios', $usuario);
    }

    public function aprobarCliente($id){
        $usuario = Usuario::find($id);
        $usuario->estado = 'ACTIVO';
        if($usuario->save()){
            return Response::json(array(
                        'msg' => 'ok'
            ));
        }else{
            return Response::json(array(
                        'msg' => 'error'
            ));
        }
    }
    public function update($id) {
       
        // read more on validation at http://laravel.com/docs/validation

         if (Request::ajax()) {
            $rules = array(
               
                
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Response::json(array(
                            'msg' => 'error'
                ));
        } else {
            // store
            $usuario = Usuario::find($id);
            $usuario->nombre = Input::get('nombre');
            $usuario->password = Input::get('password');
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais = Input::get('pais');
            $usuario->ciudad = Input::get('ciudad');
            
            if(Input::get('tipo_usuario')){
                $usuario->tipo_usuario = Input::get('tipo_usuario');
                
            }else{
                $usuario->tipo_usuario = 'CLIENTE';
            }
            $usuario->save();

             return Response::json(array(
                            'msg' => 'ok'
                ));}
    }}

            
    public function destroy($id) {
    
        $usuario = Usuario::find($id);
        if($usuario->delete()){
            return Response::json(array(
                    'msg' => 'ok'
            )); 
        }else{
            return Response::json(array(
                        'msg' => 'error'
            ));
        }
    }

}
