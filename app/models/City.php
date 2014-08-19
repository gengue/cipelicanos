<?php

class City extends Eloquent{
    
  public function pais() {
        return $this->belongsTo('Country', 'CountryCode');
    }
}