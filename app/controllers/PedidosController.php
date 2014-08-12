<?php

class PedidosController extends BaseController {

    public function index() {

        $pedidos = DB::table('pedidos')
                        ->join('productos', 'productos.id', '=', 'pedidos.producto_id')
                        ->join('proveedores', 'proveedores.id', '=', 'pedidos.proveedor_id')
                        ->join('navieras', 'navieras.id', '=', 'pedidos.naviera_id')
                        ->join('guias', 'guias.id', '=', 'pedidos.guia_id')
                        ->whereNull('pedidos.deleted_at')
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'guias.numero_guia as nombre_guia')->get();

        //Agregamos los containers por medio de una consulta
        foreach ($pedidos as $key => $value) {
            //containers para el CADA pedido
            $pedidos[$key]->containers = DB::table('pedidos_containers')
                            ->join('containers', 'containers.id', '=', 'pedidos_containers.container_id')
                            ->where('pedidos_containers.pedido_id', '=', $pedidos[$key]->id)->get();
        }

        //print_r($pedidos[1]) ;


        return View::make('pedidos.index')->with('pedidos', $pedidos);
    }

    public function create() {
        $productos = Producto::lists('nombre', 'id');
        $proveedores = Proveedore::lists('nombre', 'id');
        $navieras = Naviera::lists('nombre', 'id');
        $container = Container::lists('numero_container', 'id');
        $guias = Guia::lists('numero_guia', 'id');

        return View::make('pedidos.create', array('productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'container' => $container,
                    'guias' => $guias));
    }

    public function store() {
        $rules = array(
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('pedidos/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            $pedido = new Pedido; //creamos un pedido
            $pedido->producto_id = Input::get('producto_id');
            $pedido->proveedor_id = Input::get('proveedor_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->guia_id = Input::get('guia_id');
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            $pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();

            $containers = Input::get('containers');
            //Guardamos los containers asociados al pedido guardado
            foreach ($containers as $key => $value) {
                $relacion = new PedidosContainer;
                $relacion->pedido_id = $pedido->id;
                $relacion->container_id = $containers[$key];
                $relacion->save();
            }
            Session::flash('message', 'Pedido guardado correctamente!');
            return Redirect::to('pedidos');
        }
    }

    public function show($id) {

        $pedido = DB::table('pedidos')
                        ->join('productos', 'productos.id', '=', 'pedidos.producto_id')
                        ->join('proveedores', 'proveedores.id', '=', 'pedidos.proveedor_id')
                        ->join('navieras', 'navieras.id', '=', 'pedidos.naviera_id')
                        ->join('guias', 'guias.id', '=', 'pedidos.guia_id')
                        ->where('pedidos.id', '=', $id)
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'guias.numero_guia as nombre_guia')->first();

        $pedido->containers = DB::table('pedidos_containers')
                        ->join('containers', 'containers.id', '=', 'pedidos_containers.container_id')
                        ->where('pedidos_containers.pedido_id', '=', $id)->get();
        //print_r($pedido);
        return View::make('pedidos.show', array('pedido' => $pedido));
    }

    public function edit($id) {

        $pedido = Pedido::find($id);

        $pedido->containers = DB::table('pedidos_containers')
                        ->join('containers', 'containers.id', '=', 'pedidos_containers.container_id')
                        ->where('pedidos_containers.pedido_id', '=', $id)
                        ->select('containers.id','containers.numero_container')->lists('id');
        
       
        $productos = Producto::lists('nombre', 'id');
        $proveedores = Proveedore::lists('nombre', 'id');
        $navieras = Naviera::lists('nombre', 'id');
        $container = Container::lists('numero_container', 'id');
        $guias = Guia::lists('numero_guia', 'id');
        
        return View::make('pedidos.edit', array('pedido'=>$pedido,
                    'productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'container' => $container,
                    'guias' => $guias));
    }

    public function update($id) {

        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('pedidos/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // Update
            $pedido = Pedido::find($id);
            $pedido->producto_id = Input::get('producto_id');
            $pedido->proveedor_id = Input::get('proveedor_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->guia_id = Input::get('guia_id');
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            $pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();
            
            PedidosContainer::where('pedido_id','=',$id)->forceDelete();
            
            $containers = Input::get('containers');
            //Guardamos los containers asociados al pedido guardado
            foreach ($containers as $key => $value) {
                $relacion = new PedidosContainer;
                $relacion->pedido_id = $pedido->id;
                $relacion->container_id = $containers[$key];
                $relacion->save();
            }
            // redirect
            Session::flash('message', 'Pedidos actualizado correctamente!');
            return Redirect::to('pedidos');
        }
    }

    public function destroy($id) {
        PedidosContainer::where('pedido_id','=',$id)->delete();
        Pedido::find($id)->delete();
        
        Session::flash('message', 'Pedido eliminado correctamente!');
        return Redirect::to('pedidos');
    }

}
