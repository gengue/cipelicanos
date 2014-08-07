<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Pedido extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}