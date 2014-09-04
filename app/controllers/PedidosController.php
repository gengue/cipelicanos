<?php

class PedidosController extends BaseController {

    public function index() {

        
        $pedidos = Pedido::where('estado', '=', 'ACTIVO')->get();

        return View::make('pedidos.index')->with('pedidos', $pedidos);
    }

    public function historial() {

        $pedidos = Pedido::where('estado', '=', 'INACTIVO')->get();

        return View::make('pedidos.historial')->with('pedidos', $pedidos);
    }

    public function create() {
        $productos = Producto::lists('nombre', 'id');
        $proveedores = Proveedor::lists('nombre', 'id');
        $navieras = Naviera::lists('nombre', 'id');
        $companias = Compania::lists('nombre', 'id');
        //$container = Container::lists('numero_container', 'id');
        //$guias = Guia::lists('numero_guia', 'id');

        return View::make('pedidos.create', array('productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'companias'=> $companias
        ));
    }

    public function store() {
        $rules = array(
            'containers' => 'required',
            'numero_guia' => 'required',
            'empresa_envio' => 'required',
            'numero_reserva' => 'required',
            'buque' => 'required',
            'importe_facturado' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        } else {
            //Primero guadamos la guia
            $dir = 'public/archivos/';
            $nombreArchivo = Input::get('numero_guia') . '.pdf';
            // store            
            $guia = new Guia;
            $guia->numero_guia = Input::get('numero_guia');
            $guia->empresa_envio = Input::get('empresa_envio');

            if (Input::hasFile('url_archivo')) {
                $archivo = Input::file('url_archivo');
                $guia->url_archivo = $dir . $nombreArchivo;
                $archivo->move($dir, $nombreArchivo);
            }

            $guia->save();

            $pedido = new Pedido; //creamos un pedido
            $pedido->producto_id = Input::get('producto_id');
            $pedido->proveedor_id = Input::get('proveedor_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->guia_id = $guia->id;
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            $pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();

            $containers = Input::get('containers');
            $Array_containers = preg_split("/[\s,]+/", $containers);

            //Guardamos los containers asociados al pedido guardado
            foreach ($Array_containers as $key => $value) {
                $container = new Container;
                $container->numero_container = $Array_containers[$key];
                $container->save();
                $relacion = new PedidosContainer;
                $relacion->pedido_id = $pedido->id;
                $relacion->container_id = $container->id;
                $relacion->save();
            }

            return Response::json(array(
                        'msg' => 'ok',
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

        $guia = Guia::find($pedido->guia_id);

        return View::make('pedidos.edit', array('pedido' => $pedido,
                    'productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'guia' => $guia));
    }

    public function update($id) {

        $rules = array(
            'containers' => 'required',
            'numero_guia' => 'required',
            'empresa_envio' => 'required',
            'numero_reserva' => 'required',
            'buque' => 'required',
            'importe_facturado' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        } else {
            $pedido = Pedido::find($id);

            //Primero guadamos la guia
            $dir = 'public/archivos/';
            $nombreArchivo = Input::get('numero_guia') . '.pdf';
            // store            
            $guia = Guia::find($pedido->guia_id);
            $guia->numero_guia = Input::get('numero_guia');
            $guia->empresa_envio = Input::get('empresa_envio');

            if (Input::hasFile('url_archivo')) {
                $archivo = Input::file('url_archivo');
                $guia->url_archivo = $dir . $nombreArchivo;
                $archivo->move($dir, $nombreArchivo);
            }

            $guia->save();

            $pedido->producto_id = Input::get('producto_id');
            $pedido->proveedor_id = Input::get('proveedor_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->guia_id = $guia->id;
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            $pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();

            $borrados = PedidosContainer::where('pedido_id', $id)->get();
            PedidosContainer::where('pedido_id', $id)->forceDelete();
            
            foreach ($borrados as $bor) {
                Container::find($bor->container_id)->forceDelete();
            }
            $containers = Input::get('containers');


            $Array_containers = preg_split("/[\s,]+/", $containers);

            //Guardamos los containers asociados al pedido guardado
            foreach ($Array_containers as $key => $value) {
                $container = new Container;
                $container->numero_container = $Array_containers[$key];
                $container->save();
                $relacion = new PedidosContainer;
                $relacion->pedido_id = $pedido->id;
                $relacion->container_id = $container->id;
                $relacion->save();
            }

            return Response::json(array(
                        'msg' => 'ok',
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
