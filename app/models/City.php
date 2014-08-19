<?php

class City extends Eloquent{
  public $table = "City";
  
  public function pais() {
        return $this->belongsTo('Country', 'CountryCode');
    }
}