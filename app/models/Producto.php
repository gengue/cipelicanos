<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Producto extends Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    //se crea una relacion entre el producto y los proveedores, esto sustituye la query comentada abajo
    public function proveedor() {
        return $this->belongsTo('Proveedor', 'proveedor_id')->withTrashed();
    }

//    public function obtenerProductos() {
//        $resultado = DB::table('productos')
//                ->join('proveedores', 'proveedor.id', '=', 'producto.proveedor_id')
//                ->whereNull('productos.deleted_at')
//                ->select('productos.id', 'productos.nombre', 'productos.descripcion', 'proveedores.nombre as nombreprov')
//                ->get();
//
//        return $resultado;
//    }

}
