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
            'nombre' => 'required',
            'nombre_contacto' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
                ));
        } else {
            
            $naviera = new Naviera;
            $naviera->nombre = Input::get('nombre');
            $naviera->nombre_contacto = Input::get('nombre_contacto');
            $naviera->email = Input::get('email');
            $naviera->telefono = Input::get('telefono');
            $naviera->direccion = Input::get('direccion');
            $naviera->url_seguimiento = Input::get('url_seguimiento');
            $naviera->save();

            return Response::json(array(
                            'msg' => 'ok'
                ));
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
            'nombre_contacto' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
                ));
        } else {
            // store
            $naviera = Naviera::find($id);
            $naviera->nombre = Input::get('nombre');
            $naviera->nombre_contacto = Input::get('nombre_contacto');
            $naviera->email = Input::get('email');
            $naviera->telefono = Input::get('telefono');
            $naviera->direccion = Input::get('direccion');
            $naviera->url_seguimiento = Input::get('url_seguimiento');
            $naviera->save();
            // redirect
            return Response::json(array(
                            'msg' => 'ok'
                ));
        }
    }

 
    public function destroy($id) {
     
        $naviera = Naviera::find($id);
        if($naviera->delete()){
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
