<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Usuario extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}