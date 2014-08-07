<?php

class NavierasController extends BaseController {

    
    public function index() {
        
        $navieras = Naviera::all();
        
        return View::make('navieras.index')
                        ->with('navieras', $navieras);
    }

    public function create() {
        return View::make('navieras.create');
    }

    public function store() {
      
        $rules = array(
            'nombre' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('navieras/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            
            $naviera = new Naviera;
            $naviera->nombre = Input::get('nombre');
            $naviera->nombre_contacto = Input::get('nombre_contacto');
            $naviera->telefono = Input::get('telefono');
            $naviera->direccion = Input::get('direccion');
            $naviera->save();

            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('navieras');
        }
    }

    public function show($id) {
        $naviera = Naviera::find($id);

        return View::make('navieras.show')
                        ->with('naviera', $naviera);
    }
   
    public function edit($id) {
        // get the nerd
        $naviera = Naviera::find($id);

        return View::make('navieras.edit')
                        ->with('naviera', $naviera);
    }
 
    public function update($id) {
        $rules = array(
            'nombre' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('navieras/' . $id . '/edit')
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
            return Redirect::to('navieras');
        }
    }

 
    public function destroy($id) {
     
        $naviera = Naviera::find($id);
        $naviera->delete();

        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('navieras');
    }

}
