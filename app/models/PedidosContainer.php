<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PedidosContainer extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}