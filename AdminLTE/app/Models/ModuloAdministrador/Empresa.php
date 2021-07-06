<?php

namespace App\Models\ModuloAdministrador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a uno

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function estados()
    {
        return $this->hasMany('App\Models\Estados');
    }
}