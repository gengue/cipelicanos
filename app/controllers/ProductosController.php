<?php

class ProductosController extends BaseController {

    public function index() {
        $productosdb = new Producto();
        $productos = $productosdb->obtenerProductos();
        return View::make('productos.index')->with('productos', $productos);
    }

    public function create() {

        $proveedores = Proveedore::lists('nombre', 'id');

        return View::make('productos.create', array('proveedores' => $proveedores));
    }

    public function store() {
        $rules = array(
            'nombre' => 'required',
            'proveedor' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('productos/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            $producto = new Producto; //creamos un producto
            $producto->nombre = Input::get('nombre');
            $producto->descripcion = Input::get('descripcion');
            $producto->save();

            $proveedorProducto = new ProveedoresProducto; //creamos una nueva relacion
            $proveedorProducto->productos_id = $producto->id;
            $proveedorProducto->proveedores_id = Input::get('proveedor');
            $proveedorProducto->save();

            Session::flash('message', 'Producto guardado correctamente!');
            return Redirect::to('productos');
        }
    }

    public function show($id) {
        $producto = Producto::find($id);
        $relacion = ProveedoresProducto::where('productos_id', '=', $id)->first();
        $proveedor = Proveedore::find($relacion->proveedores_id);

        return View::make('productos.show', array('producto' => $producto, 'proveedor' => $proveedor));
    }

    public function edit($id) {
        $producto = Producto::find($id);       
        $proveedor = Proveedore::find(ProveedoresProducto::where('productos_id', '=', $id)->first()->proveedores_id);
        
        $proveedores = Proveedore::lists('nombre', 'id');
        return View::make('productos.edit', array('producto' => $producto,
                                                    'proveedor' => $proveedor,
                                                    'proveedores' => $proveedores
                                                ));
    }

    public function update($id) {

        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nombre' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('productos/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $producto = Producto::find($id);
            $producto->nombre = Input::get('nombre');
            $producto->descripcion = Input::get('descripcion');
            $producto->save();
            
            $proveedorProducto = ProveedoresProducto::where('productos_id', '=', $id)->first();           
            $proveedorProducto->productos_id = $producto->id;
            $proveedorProducto->proveedores_id = Input::get('proveedor');
            $proveedorProducto->save();
            // redirect
            Session::flash('message', 'Producto actualizado correctamente!');
            return Redirect::to('productos');
        }
    }

    public function destroy($id) {

        $producto = Producto::find($id);
        $relacion = ProveedoresProducto::where('productos_id', '=', $id)->first();

        $relacion->delete();
        $producto->delete();

        Session::flash('message', 'Producto eliminado correctamente!');
        return Redirect::to('productos');
    }

}
