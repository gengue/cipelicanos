<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Guia extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function pedido(){
    	return $this->belongsTo('Pedido', 'pedido_id');
    }
}