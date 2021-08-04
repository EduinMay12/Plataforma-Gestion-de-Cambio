<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a muchos inversa
    public function leccione()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Leccione');
    }

    public function cuestionario()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Cuestionario');
    }
}
