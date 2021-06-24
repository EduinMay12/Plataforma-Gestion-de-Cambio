<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function cuestionario()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Cuestionario');
    }

    //Relacion uno a muchos
    public function opciones()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Opcione');
    }
}
