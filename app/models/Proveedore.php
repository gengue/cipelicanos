<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Proveedore extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
   
}