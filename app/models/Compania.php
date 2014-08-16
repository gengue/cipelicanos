<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Compania extends Eloquent{
    
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
}