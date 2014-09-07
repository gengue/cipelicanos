<?php

class PedidosClienteController extends BaseController {

    public function pedidos() {

         $pedidos = Pedido::with(array('compania' => function($query)
         {
            $query->where('usuario_id', Auth::id())->orderBy('created_at', 'desc');

         }))->where('estado', 'ACTIVO')->get();

        return View::make('mod_cliente.pedidos')
                    ->with('pedidos',$pedidos);
    }

    public function historial() {

         $pedidos = Pedido::with(array('compania' => function($query)
         {
            $query->where('usuario_id', Auth::id())->orderBy('created_at', 'desc');

         }))->where('estado', 'INACTIVO')->get();

        return View::make('mod_cliente.pedidos')
                    ->with('pedidos',$pedidos);
    }



}
