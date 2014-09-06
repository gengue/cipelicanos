<?php

class CompaniasClienteController extends BaseController {


    public function index() {

        $companias = Compania::where('usuario_id', Auth::id())->get();

        return View::make('mod_cliente.companias.index')
                        ->with('companias', $companias);
    }


    public function create() { 
        return View::make('mod_cliente.companias.create');
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

            $companias->usuario_id = Auth::id();

            $companias->save();
            // redirect
            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }


    public function show($id) {
        $companias = Compania::find($id);

        return View::make('mod_cliente.companias.show')
                        ->with('companias', $companias);
    }

    public function edit($id) {
     
        $companias = Compania::find($id);

        return View::make('mod_cliente.companias.edit', array('compania' => $companias));
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
            $companias->usuario_id = Auth::id();
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
