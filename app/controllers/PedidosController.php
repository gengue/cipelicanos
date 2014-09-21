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
        $productos = ['null' => 'Seleccione uno...'] + Producto::lists('nombre', 'id');
        $proveedores = ['null' => 'Seleccione uno...'] + Proveedor::lists('nombre', 'id');
        $navieras = ['null' => 'Seleccione una...'] + Naviera::lists('nombre', 'id');
        $companias = ['null' => 'Seleccione una...'] + Compania::lists('nombre', 'id');
        //$container = Container::lists('numero_container', 'id');
        //$guias = Guia::lists('numero_guia', 'id');

        return View::make('pedidos.create', array('productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'companias' => $companias
        ));
    }

    public function store() {

        $validator = Validator::make(Input::all(), Pedido::$rules);

        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        } else {

            $pedido = new Pedido; //creamos un pedido
            $pedido->producto_id = Input::get('producto_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->compania_id = Input::get('compania_id');
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->numero_viaje = Input::get('numero_viaje');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->tipo = Input::get('tipo');
            //$pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            //$pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();

            $containers = Str::upper(Input::get('containers'));
            $Array_containers = preg_split("/[\s,]+/", $containers);

            //Guardamos los containers asociados al pedido guardado
            foreach ($Array_containers as $key => $value) {
                //Verificamos que el container no exista en la base de datos 
                $respuesta = Container::where('numero_container', $Array_containers[$key])->first();
                if ($respuesta) { //Si Existe solo obtenemos la id para hacer la ralacion con el pedido
                    $relacion = new PedidosContainer;
                    $relacion->pedido_id = $pedido->id;
                    $relacion->container_id = $respuesta->id;
                    $relacion->save();
                } else { //Si no se encontró el container se crea y se asocia
                    $container = new Container;
                    $container->numero_container = $Array_containers[$key];
                    $container->save();
                    $relacion = new PedidosContainer;
                    $relacion->pedido_id = $pedido->id;
                    $relacion->container_id = $container->id;
                    $relacion->save();
                }
            }

            $this->enviarMail($pedido, Usuario::find(Auth::id()), 'Tienes un nuevo Pedido!');


            return Response::json(array(
                        'msg' => 'ok',
                        'id_pedido' => $pedido->id
                            //'id' => $pedido->id
            ));
        }
    }

    private function enviarMail($pedido, $usuario, $asunto) {
        Mail::send('emails.nuevoPedido', array('pedido' => $pedido, 'usuario' => $usuario), function ($message) use($usuario, $asunto) {
            $message->subject($asunto);

            $message->to($usuario->correo, $usuario->nombre . " " . $usuario->apellido);
        });
    }

    public function show($id) {

        $pedido = Pedido::find($id);
        //print_r($pedido);
        return View::make('pedidos.show', array('pedido' => $pedido));
    }

    public function edit($id) {
        $containerdb = new PedidosContainer();
        $pedido = Pedido::find($id);
        $pedido->containers = $containerdb->obtenerListaContainer($id);

        $productos = ['null' => 'Seleccione uno...'] + Producto::lists('nombre', 'id');
        $proveedores = ['null' => 'Seleccione uno...'] + Proveedor::lists('nombre', 'id');
        $navieras = ['null' => 'Seleccione una...'] + Naviera::lists('nombre', 'id');
        $companias = ['null' => 'Seleccione una...'] + Compania::lists('nombre', 'id');

        $guias = Guia::where('pedido_id', $id)->get();

        return View::make('pedidos.edit', array('pedido' => $pedido,
                    'productos' => $productos,
                    'proveedores' => $proveedores,
                    'navieras' => $navieras,
                    'companias' => $companias,
                    'guias' => $guias
        ));
    }

    public function update($id) {


        $validator = Validator::make(Input::all(), Pedido::$rules);

        if ($validator->fails()) {
            return Response::json(array(
                        'msg' => 'error'
            ));
        } else {
            $pedido = Pedido::find($id);
            $pedido->producto_id = Input::get('producto_id');
            $pedido->naviera_id = Input::get('naviera_id');
            $pedido->compania_id = Input::get('compania_id');
            $pedido->numero_reserva = Input::get('numero_reserva');
            $pedido->buque = Input::get('buque');
            $pedido->numero_viaje = Input::get('numero_viaje');
            $pedido->fecha_carga = Input::get('fecha_carga');
            $pedido->fecha_abordaje = Input::get('fecha_abordaje');
            $pedido->fecha_entrega = Input::get('fecha_entrega');
            $pedido->tipo = Input::get('tipo');
            //$pedido->fecha_vencimiento = Input::get('fecha_vencimiento');
            //$pedido->importe_facturado = Input::get('importe_facturado');
            $pedido->save();


            PedidosContainer::where('pedido_id', $id)->forceDelete();
            $containers = Str::upper(Input::get('containers'));

            $Array_containers = preg_split("/[\s,]+/", $containers);

            //Guardamos los containers asociados al pedido guardado
            foreach ($Array_containers as $key => $value) {
                //Verificamos que el container no exista en la base de datos 
                $respuesta = Container::where('numero_container', $Array_containers[$key])->first();
                if ($respuesta) { //Si Existe solo obtenemos la id para hacer la ralacion con el pedido
                    $relacion = new PedidosContainer;
                    $relacion->pedido_id = $pedido->id;
                    $relacion->container_id = $respuesta->id;
                    $relacion->save();
                } else { //Si no se encontró el container se crea y se asocia
                    $container = new Container;
                    $container->numero_container = $Array_containers[$key];
                    $container->save();
                    $relacion = new PedidosContainer;
                    $relacion->pedido_id = $pedido->id;
                    $relacion->container_id = $container->id;
                    $relacion->save();
                }
            }
            $this->enviarMail($pedido, Usuario::find(Auth::id()), 'Tu pedido ha sido actualizado! mas info: '.$id);


            return Response::json(array(
                        'msg' => 'ok',
                        'id_pedido' => $pedido->id
            ));
        }
    }

 /* Actualiza el estado del pedido a inactivo, este automaticamente se pasara al
    historial de pedidos
  */
    public function finalizar($id){
        $pedido = Pedido::find($id);
        $pedido->estado = 'INACTIVO';
        if($pedido->save()){
            return Response::json(array(
                    'msg' => 'ok'
            ));
        }else{
            return Response::json(array(
                    'msg' => 'error'
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
