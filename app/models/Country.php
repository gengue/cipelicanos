<?php

class Country extends Eloquent{
   protected $primaryKey = 'Code';
   public $incrementing = false; 
   
   public function ciudades() {
        return $this->hasMany('City');
    }
}