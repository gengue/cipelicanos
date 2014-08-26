<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Usuario extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function ciudad(){
        return $this->belongsTo('City', 'ciudad_id');
    }
    public function pais(){
        return $this->belongsTo('Country', 'pais_id');
    }
}