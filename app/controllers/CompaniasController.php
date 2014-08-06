<?php

class CompaniasController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all the nerds
        $companias = Compania::all();

        // load the view and pass the nerds
        return View::make('companias.index')
                        ->with('companias', $companias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('companias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
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
            $companias->id_usuario = 0;
            $companias->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return Redirect::to('companias');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get the nerd
        $companias = Compania::find($id);

        // show the view and pass the nerd to it
        return View::make('companias.show')
                        ->with('companias', $companias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the nerd
        $companias = Compania::find($id);

        // show the view and pass the nerd to it
        return View::make('companias.edit')
                        ->with('companias', $companias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
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
            $companias->id_usuario = 0;
            $companias->save();
            // redirect
            Session::flash('message', 'Successfully updated!');
            return Redirect::to('companias');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        // delete
        $companias = Compania::find($id);
        $companias->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('companias');
    }

}


