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
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'guias.numero_guia as nombre_guia')->get();
        //Agregamos los containers por medio de una consulta
        foreach ($pedidos as $key => $value) {
            //containers para el CADA pedido
            $pedidos[$key]->containers = $containerdb->obtenerContainer($pedidos[$key]->id);
        }
        
        return $pedidos;
    }
    
    
    //devuelve un pedido especifico
    public function obtenerPedido($id){
        $containerdb = new PedidosContainer();
        
        $pedido = DB::table('pedidos')
                        ->join('productos', 'productos.id', '=', 'pedidos.producto_id')
                        ->join('proveedores', 'proveedores.id', '=', 'pedidos.proveedor_id')
                        ->join('navieras', 'navieras.id', '=', 'pedidos.naviera_id')
                        ->join('guias', 'guias.id', '=', 'pedidos.guia_id')
                        ->where('pedidos.id', '=', $id)
                        ->select('pedidos.*', 'productos.nombre as nombre_producto', 'proveedores.nombre as nombre_proveedor', 'navieras.nombre as nombre_naviera', 'guias.numero_guia as nombre_guia')->first();

        $pedido->containers = $containerdb->obtenerContainer($id);
        
        return $pedido;
    }
//relaciones
    public function compania(){
        return $this->belongsTo('Compania', 'compania_id');
    }
    public function producto(){
        return $this->belongsTo('Producto', 'producto_id');
    }
    public function naviera(){
        return $this->belongsTo('Naviera', 'naviera_id');
    }
    public function guias(){
        return $this->hasMany('Guia');
    }
    public function containers(){
        return $this->belongsToMany('Container', 'pedidos_containers');
    }
    
}