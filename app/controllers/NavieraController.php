<?php

class NavieraController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all the nerds
        $navieras = Naviera::all();

        // load the view and pass the nerds
        return View::make('navieras.index')
                        ->with('navieras', $navieras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('create');
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
            'nombre' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('naviera/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $naviera = new Naviera;
            $naviera->nombre = Input::get('nombre');
            $naviera->nombre_contacto = Input::get('nombre_contacto');
            $naviera->telefono = Input::get('telefono');
            $naviera->direccion = Input::get('direccion');
            $naviera->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('naviera');
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
        $naviera = Naviera::find($id);

        // show the view and pass the nerd to it
        return View::make('navieras.show')
                        ->with('naviera', $naviera);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the nerd
        $naviera = Naviera::find($id);

        // show the view and pass the nerd to it
        return View::make('navieras.edit')
                        ->with('naviera', $naviera);
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
            'nombre' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('naviera/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $naviera = Naviera::find($id);
            $naviera->nombre = Input::get('nombre');
            $naviera->nombre_contacto = Input::get('nombre_contacto');
            $naviera->telefono = Input::get('telefono');
            $naviera->direccion = Input::get('direccion');
            $naviera->save();

            // redirect
            Session::flash('message', 'Naviera actualizada correctamente!');
            return Redirect::to('naviera');
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
        $naviera = Naviera::find($id);
        $naviera->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('naviera');
    }

}
