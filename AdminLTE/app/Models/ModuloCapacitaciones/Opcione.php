<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcione extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function pregunta()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Pregunta');
    }
}
