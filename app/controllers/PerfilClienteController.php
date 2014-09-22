<?php



class PerfilClienteController extends BaseController {
    
    public function index() {
   
        $usuarios = Usuario::where('id', Auth::id())->get();

        return View::make('mod_cliente.perfil.index')
                        ->with('perfil', $usuarios);
    }


    public function create() { 
        return View::make('');
    }


    public function store() {
       }
    


    public function show($id) {
        $usuario = Usuario::find($id);

        return View::make('mod_cliente.perfil.show')
                        ->with('perfil', $usuario);
    }

    public function edit($id) {
     
        $usuario = Usuario::find($id);
        $paises = Country::lists('nombre', 'Code');
        $ciudades = Country::find($usuario->pais_id)->ciudades->lists('nombre', 'id');
        unset($usuario->password); //eliminamos el atributo de la contraseña

        return View::make('mod_cliente.perfil.edit', array('perfil' => $usuario,
                                                   'paises'=> $paises,
                                                   'ciudades' => $ciudades
            ));
      
    }

    public function update($id) {
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
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais_id = Input::get('pais');
            $usuario->ciudad_id = Input::get('ciudad');
            $usuario->save();
            
            return Response::json(array(
                            'msg' => 'ok'
                ));} }


    public function destroy($id) {
        // delete
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

    public function cambiarPassword(){
        $usuario = Usuario::find(Auth::id());
        
        $rules = array(
          'password_nueva' => 'required|alpha_num|between:6,25',
          'password_nueva2' => 'required|alpha_num|between:6,25');

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array('msg' => 'errorFormat'));
        }
        
        if (Hash::check(Input::get('password_vieja'), $usuario->password)) 
        {
            if(Input::get('password_nueva') == Input::get('password_nueva2')){
                $usuario->password = Hash::make(Input::get('password_nueva'));
                $usuario->save();               //Se actualiza la contraseña
                return Response::json(array('msg' => 'ok' )); 
            }else{
                return Response::json(array('msg' => 'errorConfirm' )); //no coinciden
            }

        }else{
            return Response::json(array('msg' => 'errorPass' )); //la contraseña ingresada no es la que esta registrada en el sistema
        }
    }

}


    
