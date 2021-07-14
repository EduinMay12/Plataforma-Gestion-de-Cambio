<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion muchos a muchos
    public function lecciones()
    {
        return $this->belongsToMany('App\Models\ModuloCapacitaciones\Leccione');
    }

    //Relacion uno a muchos
    public function preguntas()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Pregunta');
    }
}
