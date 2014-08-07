<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ProveedoresProducto extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}
