<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Naviera extends Eloquent{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}
