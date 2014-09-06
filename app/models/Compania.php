<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Compania extends Eloquent{
    
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function cliente(){
    	return $this->belongsTo('Usuario', 'usuario_id');
    }

    public function pedidos(){
    	return $this->hasMany('Pedido');
    }

}