<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function leccion()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Leccione');
    }
}
