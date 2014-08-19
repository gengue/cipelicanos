<?php

class ProductosController extends BaseController {

    public function index() {

        $productos = Producto::all();
        
        return View::make('productos.index')->with('productos', $productos);
    }

    public function create() {

        $proveedores = Proveedor::lists('nombre', 'id');

        return View::make('productos.create', array('proveedores' => $proveedores));
    }

    public function store() {

        if (Request::ajax()) {
            $rules = array(
                'nombre' => 'required',
                'proveedor' => 'required'
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Response::json(array(
                            'msg' => 'error'
                ));
            } else {
                $producto = new Producto; //creamos un producto
                $producto->nombre = Input::get('nombre');
                $producto->descripcion = Input::get('descripcion');
                $producto->proveedor_id = Input::get('proveedor');
                $producto->save();

                return Response::json(array(
                            'msg' => 'ok'
                ));
            }
        }
    }

    public function show($id) {
        $producto = Producto::find($id);
        $proveedor = $producto->proveedor();

        return View::make('productos.show', array('producto' => $producto, 'proveedor' => $proveedor));
    }

    public function edit($id) {
        $producto = Producto::find($id);
        $proveedor = $producto->proveedor();

        $proveedores = Proveedor::lists('nombre', 'id');
        return View::make('productos.edit', array('producto' => $producto,
                    'proveedor' => $proveedor,
                    'proveedores' => $proveedores
        ));
    }

    public function update($id) {

        if (Request::ajax()) {
            $rules = array(
                'nombre' => 'required',
                'proveedor' => 'required'
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Response::json(array(
                            'msg' => 'error'
                ));
            } else {
                $producto = Producto::find($id);
                $producto->nombre = Input::get('nombre');
                $producto->descripcion = Input::get('descripcion');
                $producto->proveedor_id = Input::get('proveedor');
                $producto->save();

                return Response::json(array(
                            'msg' => 'ok'
                ));
            }
        }
    }

    public function destroy($id) {

        $producto = Producto::find($id);

        if (!$producto->delete()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        }
        return Response::json(array(
                    'msg' => 'ok'
        ));
    }

}
