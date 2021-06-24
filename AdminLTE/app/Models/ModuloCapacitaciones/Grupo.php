<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function curso()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Curso');
    }

    //Relacion muchos a muchos (matriculaciones)
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
