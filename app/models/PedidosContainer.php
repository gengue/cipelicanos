<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PedidosContainer extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function obtenerContainer($id){
        $container = DB::table('pedidos_containers')
                        ->join('containers', 'containers.id', '=', 'pedidos_containers.container_id')
                        ->where('pedidos_containers.pedido_id', '=', $id)->get();
        return $container;
    }
    
    public function obtenerListaContainer($id){
        $containerlist = DB::table('pedidos_containers')
                        ->join('containers', 'containers.id', '=', 'pedidos_containers.container_id')
                        ->where('pedidos_containers.pedido_id', '=', $id)
                        ->select('containers.id', 'containers.numero_container')->lists('id');
        return $containerlist;
    }
}