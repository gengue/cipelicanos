<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Producto extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}