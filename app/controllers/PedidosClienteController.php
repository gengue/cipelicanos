<?php

class PedidosClienteController extends BaseController {

    public function pedidos() {

         $usuario = Usuario::find(Auth::id());
         $objPedidos = array();

         foreach ($usuario->companias as $compania) {
             foreach ($compania->pedidos as $pedido) {
                if($pedido->estado == 'ACTIVO'){
                    $objPedidos[] = $pedido;        
                }
             }
         }
         
        return View::make('mod_cliente.pedidos')
                    ->with('pedidos',$objPedidos);
    }

    public function historial() {

         $usuario = Usuario::find(Auth::id());
         $objPedidos = array();

         foreach ($usuario->companias as $compania) {
             foreach ($compania->pedidos as $pedido) {
                if($pedido->estado == 'INACTIVO'){
                    $objPedidos[] = $pedido;        
                }
             }
         }
         
        return View::make('mod_cliente.pedidos')
                    ->with('pedidos',$objPedidos);
    }



}
