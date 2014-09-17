<?php

class UsuarioController extends BaseController {


  
    public function index() {


        $usuarios = Usuario::all();
        return View::make('usuarios.index')
                        ->with('usuarios', $usuarios);
    
    }


    public function clientes() {
        
        $usuarios = Usuario::where('tipo_usuario','=','cliente')->get();
        
        return View::make('usuarios.indexClientes')
                        ->with('usuarios', $usuarios);
    }

    public function create() {
        $paises = Country::lists('nombre', 'Code');
        $ciudades = City::lists('nombre', 'id');
        return View::make('usuarios.create', array('paises'=> $paises,
                                                   'ciudades' => $ciudades
                ));
    }
 
    public function store() {
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
            $usuario = new Usuario;
            $usuario->nombre = Input::get('nombre');
            $usuario->password = Hash::make(Input::get('password'));
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais_id = Input::get('pais');
            $usuario->ciudad_id = Input::get('ciudad');
            $usuario->tipo_usuario = Input::get('tipo_usuario');
            $usuario->ultimo_acceso = new DateTime();
            $usuario->save();    
            $usuario->normalPassword = Input::get('password');
            $this->enviarMail($usuario);   

            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }}

    private function enviarMail($usuario){
        Mail::send('emails.cuentaCreada', array('usuario' => $usuario), function ($message) use($usuario){
        $message->subject('C.I Pelicanos - Se ha creado tu cuenta!');
        $message->to($usuario->correo, $usuario->nombre." ".$usuario->apellido);
});
    }

    public function show($id) {
        $usuario = Usuario::find($id);

        return View::make('usuarios.show')
                        ->with('usuarios', $usuario);
    }

  
    public function edit($id) {
    
        $usuario = Usuario::find($id);
        $paises = Country::lists('nombre', 'Code');
        $ciudades = Country::find($usuario->pais_id)->ciudades->lists('nombre', 'id');
        return View::make('usuarios.edit', array('usuario' => $usuario,
                                                   'paises'=> $paises,
                                                   'ciudades' => $ciudades
            ));
                        
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
            $usuario->password = Hash::make(Input::get('password'));
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais_id = Input::get('pais');
            $usuario->ciudad_id = Input::get('ciudad');
            
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
