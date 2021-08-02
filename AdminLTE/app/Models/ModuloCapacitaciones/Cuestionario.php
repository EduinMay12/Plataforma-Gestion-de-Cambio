<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a muchos
    public function preguntas()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Pregunta');
    }

    public function actividades()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Actividade');
    }
}
