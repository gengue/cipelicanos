<?php

class ContainerController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all the nerds
        $container = Container::all();

        // load the view and pass the nerds
        return View::make('container.index')
                        ->with('container', $container);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('container.create');
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
            'numero_container' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('container/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $container = new Container;
            $container->numero_container = Input::get('numero_container');
            $container->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return Redirect::to('container');
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
        $container = Container::find($id);

        // show the view and pass the nerd to it
        return View::make('container.show')
                        ->with('container', $container);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the nerd
        $container = Container::find($id);

        // show the view and pass the nerd to it
        return View::make('container.edit')
                        ->with('container', $container);
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
            'numero_container' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('container/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $container = Container::find($id);
            $container->numero_container = Input::get('numero_container');
            $container->save();
            // redirect
            Session::flash('message', 'Successfully updated!');
            return Redirect::to('container');
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
        $container = Container::find($id);
        $container->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('container');
    }

}
