<?php

class Country extends Eloquent{
   protected $primaryKey = 'Code';
   public $incrementing = false; 
   public $table = "Country";
   
   public function ciudades() {
        return $this->hasMany('City', 'CountryCode', 'Code');
    }
}