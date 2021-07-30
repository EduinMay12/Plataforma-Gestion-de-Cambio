<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccione extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a muchos inversa
    public function curso()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Curso');
    }

    //Relacion uno a muchos
    public function recursos()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Recurso');
    }

    //Relacion muchos a muchos
    public function cuestionarios()
    {
        return $this->belongsToMany('App\Models\ModuloCapacitaciones\Cuestionario');
    }
}
