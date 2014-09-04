<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Container extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function pedidos(){
    	return $this->belongsToMany('Pedido');
    }
}