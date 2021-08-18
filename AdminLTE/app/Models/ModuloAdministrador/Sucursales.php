<?php

namespace App\Models\ModuloAdministrador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a uno

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function estados()
    {
        return $this->hasMany('App\Models\Estados');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Models\ModuloAdministrador\Empresa');
    }

}
