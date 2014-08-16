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
         if (Request::ajax()) {
            $rules = array(
                'nombre' => 'required',
              
            );
        
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Response::json(array(
                            'msg' => 'error'
                ));
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
            return Response::json(array(
                            'msg' => 'ok'
                ));
            
        }
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
          if (Request::ajax()) {
            $rules = array(
                'nombre' => 'required',
                
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Response::json(array(
                            'msg' => 'error'
                ));
            } else {
                 $proveedor = Proveedore::find($id);
            $proveedor->nombre = Input::get('nombre');
            $proveedor->nombre_contacto = Input::get('nombre_contacto');
            $proveedor->telefono = Input::get('telefono');
            $proveedor->direccion = Input::get('direccion');
            $proveedor->correo = Input::get('correo');
            $proveedor->save();
                return Response::json(array(
                            'msg' => 'ok'
                ));
            }
        }
        // read more on validation at http://laravel.com/docs/validation
    }
  
    public function destroy($id) {
    
        $proveedor = Proveedore::find($id);
       
         if($proveedor->delete()){
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
