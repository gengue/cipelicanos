<?php

class CompaniasController extends BaseController {


    public function index() {

        $companias = Compania::all();

        $companias = DB::table('companias')
            ->join('usuarios', 'companias.usuario_id', '=', 'usuarios.id')
            ->select('companias.*','usuarios.nombre as nombre_usuario')
            ->get();
    //print_r($companias);
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

        // process the login
        if ($validator->fails()) {
            return Redirect::to('companias/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
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
            Session::flash('message', 'Successfully created!');
            return Redirect::to('companias');
        }
    }


    public function show($id) {
        $companias = Compania::find($id);

        return View::make('companias.show')
                        ->with('companias', $companias);
    }

    public function edit($id) {
        // get the nerd
        $companias = Compania::find($id);

        $usuarios = Usuario::lists('nombre','id');

        return View::make('companias.edit', array('companias' => $companias, 'usuarios'=>$usuarios ));
    }

    public function update($id) {
        $rules = array(

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('companias/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $companias = Compania::find($id);
            $companias->nombre = Input::get('nombre');
            $companias->nit = Input::get('nit');
            $companias->telefono = Input::get('telefono');
            $companias->correo = Input::get('correo');
            $companias->usuario_id = Input::get('usuario_id');
            $companias->save();
            // redirect
            Session::flash('message', 'Successfully updated!');
            return Redirect::to('companias');
        }
    }


    public function destroy($id) {
        // delete
        $companias = Compania::find($id);
        $companias->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('companias');
    }

}
