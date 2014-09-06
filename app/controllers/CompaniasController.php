<?php

class CompaniasController extends BaseController {


    public function index() {

        $companias = Compania::all();

        return View::make('companias.index')
                        ->with('companias', $companias);
    }


    public function create() {
        $usuarios = Usuario::lists('nombre','id');
        
        return View::make('companias.create')->with('usuarios', $usuarios);
    }


    public function store() {
       $rules = array(
        );
        $validator = Validator::make(Input::all(), $rules);

      
        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
                ));
        } else {
            // store
            $companias = new Compania;
            $companias->nombre = Input::get('nombre');
            $companias->nit = Input::get('nit');
            $companias->telefono = Input::get('telefono');
            $companias->correo = Input::get('correo');

            $companias->usuario_id = Input::get('usuario_id');

            $companias->save();
            // redirect
            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }


    public function show($id) {
        $companias = Compania::find($id);

        return View::make('companias.show')
                        ->with('companias', $companias);
    }

    public function edit($id) {
     
        $companias = Compania::find($id);

        $usuarios = Usuario::lists('nombre','id');

        return View::make('companias.edit', array('compania' => $companias, 'usuarios'=>$usuarios ));
    }

    public function update($id) {
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
            $companias = Compania::find($id);
            $companias->nombre = Input::get('nombre');
            $companias->nit = Input::get('nit');
            $companias->telefono = Input::get('telefono');
            $companias->correo = Input::get('correo');
            $companias->usuario_id = Input::get('usuario_id');
            $companias->save();
          
            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }


    public function destroy($id) {
        // delete
        $companias = Compania::find($id);

        if($companias->delete()){
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
