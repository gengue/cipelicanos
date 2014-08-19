<?php

class PedidosController extends BaseController {

    public function index() {

        $pedidosdb = new Pedido();
        $pedidos = $pedidosdb->obtenerPedidos('ACTIVO');
        
        return View::make('pedidos.index')->with('pedidos', $pedidos);
    }
    
    public function historial() {

        $pedidosdb = new Pedido();
        $pedidos = $pedidosdb->obtenerPedidos('INACTIVO');
        
        return View::make('pedidos.historial')->with('pedidos', $pedidos);
    }

    public function create() {
        $productos = Producto::lists('nombre', 'id');
        $proveedores = Proveedor::lists('nombre', 'id');
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
            'containers'=> 'required',
            'numero_reserva'=> 'required',
            'buque'=> 'required',
            'importe_facturado'=> 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
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
            return Response::json(array(
                        'msg' => 'ok'
            ));
        }
    }

    public function show($id) {

        $pedidosdb = new Pedido();
        $pedido = $pedidosdb->obtenerPedido($id);
        //print_r($pedido);
        return View::make('pedidos.show', array('pedido' => $pedido));
    }

    public function edit($id) {
        $containerdb = new PedidosContainer();
        $pedido = Pedido::find($id);

        $pedido->containers = $containerdb->obtenerListaContainer($id);

        $productos = Producto::lists('nombre', 'id');
        $proveedores = Proveedor::lists('nombre', 'id');
        $navieras = Naviera::lists('nombre', 'id');
        $container = Container::lists('numero_container', 'id');
        $guias = Guia::lists('numero_guia', 'id');

        return View::make('pedidos.edit', array('pedido' => $pedido,
                    'productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'container' => $container,
                    'guias' => $guias));
    }

    public function update($id) {

        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'containers'=> 'required',
            'numero_reserva'=> 'required',
            'buque'=> 'required',
            'importe_facturado'=> 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
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

            PedidosContainer::where('pedido_id', '=', $id)->forceDelete();

            $containers = Input::get('containers');
            //Guardamos los containers asociados al pedido guardado
            foreach ($containers as $key => $value) {
                $relacion = new PedidosContainer;
                $relacion->pedido_id = $pedido->id;
                $relacion->container_id = $containers[$key];
                $relacion->save();
            }
            // redirect
            return Response::json(array(
                        'msg' => 'ok'
            ));
        }
    }

    public function destroy($id) {
        $relacion = PedidosContainer::where('pedido_id', '=', $id);
        $pedido = Pedido::find($id);

        if (!$relacion->delete() || !$pedido->delete()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        }
        return Response::json(array(
                    'msg' => 'ok'
        ));
    }

}
