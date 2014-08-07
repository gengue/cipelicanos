<?php

class UsuarioController extends BaseController {

    public function index() {
        
        $usuarios = Usuario::all();
        return View::make('usuarios.index')
                        ->with('usuarios', $usuarios);
    }

    public function create() {
        return View::make('usuarios.create');
    }
 
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuarios/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
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
            Session::flash('message', 'Usuario guardado correctamente!');
            return Redirect::to('usuarios');
        }
    }

  
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

   
    public function update($id) {
       
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
        );
        $validator = Validator::make(Input::all(), $rules);

        
        if ($validator->fails()) {
            return Redirect::to('usuarios/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
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


            // redirect
            Session::flash('message', 'Usuario actualizado correctamente!');
            return Redirect::to('usuarios');
        }
    }
  
    public function destroy($id) {
    
        $usuario = Usuario::find($id);
        $usuario->delete();
        
        Session::flash('message', 'Proveedor eliminado correctamente!');
        return Redirect::to('usuarios');
    }

}
