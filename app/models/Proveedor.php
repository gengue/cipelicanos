<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Proveedor extends Eloquent{
    use SoftDeletingTrait;
    public $table = "proveedores";
    protected $dates = ['deleted_at'];
    
    public function productos() {
        return $this->hasMany('Producto');
    }
    
    public function delete(){
        //eliminamos los productos de este proveedor
        foreach($this->productos as $producto)
        {
            $producto->delete();
        }
        //eliminamos el post
        return parent::delete();
    }
}