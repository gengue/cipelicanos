<?php

class ContainerController extends BaseController {

   
    public function index() {
        // get all the nerds
        $container = Container::all();

        return View::make('container.index')
                        ->with('container', $container);
    }

 
    public function create() {
        return View::make('container.create');
    }

   
    public function store() {
     
        $rules = array(
            'numero_container' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
                ));
        } else {
            // store
            $container = new Container;
            $container->numero_container = Input::get('numero_container');
            $container->save();

            // redirect
            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }

   
    public function show($id) {
        // get the nerd
        $container = Container::find($id);
        
        // show the view and pass the nerd to it
        return View::make('container.show')
                        ->with('container', $container);
    }

   
    public function edit($id) {
        
        $container = Container::find($id);

        
        return View::make('container.edit')
                        ->with('container', $container);
    }

   
    public function update($id) {
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

    public function destroy($id) {
        // delete
        $container = Container::find($id);
        $container->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('container');
    }

}
