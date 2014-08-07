<?php

class ProveedoresController extends BaseController {

    public function index() {
        
        $proveedores = Proveedore::all();
        return View::make('proveedores.index')
                        ->with('proveedores', $proveedores);
    }

    public function create() {
        return View::make('proveedores.create');
    }
 
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nombre' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('proveedores/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $proveedor = new Proveedore;
            $proveedor->nombre = Input::get('nombre');
            $proveedor->nombre_contacto = Input::get('nombre_contacto');
            $proveedor->telefono = Input::get('telefono');
            $proveedor->direccion = Input::get('direccion');
            $proveedor->correo = Input::get('correo');
            $proveedor->save();

            // redirect
            Session::flash('message', 'Proveedor guardado correctamente!');
            return Redirect::to('proveedores');
        }
    }

  
    public function show($id) {
        // get the nerd
        $proveedor = Proveedore::find($id);

        // show the view and pass the nerd to it
        return View::make('proveedores.show')
                        ->with('proveedor', $proveedor);
    }

  
    public function edit($id) {
    
        $proveedor = Proveedore::find($id);

        return View::make('proveedores.edit')
                        ->with('proveedor', $proveedor);
    }

   
    public function update($id) {
       
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nombre' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        
        if ($validator->fails()) {
            return Redirect::to('proveedores/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $proveedor = Proveedore::find($id);
            $proveedor->nombre = Input::get('nombre');
            $proveedor->nombre_contacto = Input::get('nombre_contacto');
            $proveedor->telefono = Input::get('telefono');
            $proveedor->direccion = Input::get('direccion');
            $proveedor->correo = Input::get('correo');
            $proveedor->save();

            // redirect
            Session::flash('message', 'Proveedor actualizado correctamente!');
            return Redirect::to('proveedores');
        }
    }
  
    public function destroy($id) {
    
        $proveedor = Proveedore::find($id);
        $proveedor->delete();
        
        Session::flash('message', 'Proveedor eliminado correctamente!');
        return Redirect::to('proveedores.index');
    }

}
