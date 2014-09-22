<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

    use SoftDeletingTrait,
        UserTrait,
        RemindableTrait;

    protected $dates = ['deleted_at'];

    public function companias(){
        return $this->hasMany('Compania');
    }

    public function ciudad() {
        return $this->belongsTo('City', 'ciudad_id');
    }

    public function pais() {
        return $this->belongsTo('Country', 'pais_id');
    }
    public function delete(){
        //eliminamos las compañias de este proveedor
        foreach($this->companias as $compania)
        {
            $compania->delete();
        }
        return parent::delete();
    }
    protected $hidden = array('password');
    protected $fillable = array('email', 'password');
    public static $rules = array(
        'nombre' => 'required|alpha|min:2',
        'apellido' => 'required|alpha|min:2',
        'correo' => 'required|email|unique:usuarios',
        'password' => 'required|alpha_num|between:6,25|confirmed',
        'password_confirmation' => 'required|alpha_num|between:6,25'
    );

}
