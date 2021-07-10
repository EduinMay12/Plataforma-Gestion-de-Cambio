<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a muchos inversa
    public function categoria()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Categoria');
    }

    public function instructore()
    {
        return $this->belongsTo('App\Models\ModuloCapacitaciones\Instructore');
    }

    //Relacion uno a muchos
    public function grupos()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Grupo');
    }

    public function lecciones()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Leccione');
    }
}
