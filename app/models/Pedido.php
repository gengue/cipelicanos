<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Pedido extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    //Devuelve los pedidos activos o inactivos
    public function obtenerPedidos($estado){
        $containerdb = new PedidosContainer();
        
        $pedidos = DB::table('pedidos')
                        ->join('productos', 'productos.id', '=', 'pedidos.producto_id')
                        ->join('proveedores', 'proveedores.id', '=', 'pedidos.proveedor_id')
                        ->join('navieras', 'navieras.id', '=', 'pedidos.naviera_id')
                        ->join('guias', 'guias.id', '=', 'pedidos.guia_id')
                        ->whereNull('pedidos.deleted_at')
                        ->where('pedidos.estado','=',$estado)
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'navieras.url_seguimiento as url_seguimiento','guias.numero_guia as nombre_guia')->get();
        //Agregamos los containers por medio de una consulta
        foreach ($pedidos as $key => $value) {
            //containers para el CADA pedido
            $pedidos[$key]->containers = $containerdb->obtenerContainer($pedidos[$key]->id);
        }
        
        return $pedidos;
    }
    
    
    
    public function obtenerPedido($id){
        $containerdb = new PedidosContainer();
        
        $pedido = DB::table('pedidos')
                        ->join('productos', 'productos.id', '=', 'pedidos.producto_id')
                        ->join('proveedores', 'proveedores.id', '=', 'pedidos.proveedor_id')
                        ->join('navieras', 'navieras.id', '=', 'pedidos.naviera_id')
                        ->join('guias', 'guias.id', '=', 'pedidos.guia_id')
                        ->where('pedidos.id', '=', $id)
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'navieras.url_seguimiento as url_seguimiento', 'guias.numero_guia as nombre_guia')->first();

        $pedido->containers = $containerdb->obtenerContainer($id);
        
        return $pedido;
    }
}