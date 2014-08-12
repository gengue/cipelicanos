<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Producto extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function obtenerProductos(){
        $resultado = DB::table('productos')
            ->join('proveedores_productos', 'productos.id', '=', 'proveedores_productos.productos_id')
            ->join('proveedores', 'proveedores_productos.proveedores_id', '=', 'proveedores.id')
            ->select('productos.id','productos.nombre', 'productos.descripcion', 'proveedores.nombre as nombreprov')
            ->get();
  
        return $resultado;        
    }
}