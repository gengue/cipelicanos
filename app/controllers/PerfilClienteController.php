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
            $usuario->password = Hash::make(Input::get('password'));
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

}


    
