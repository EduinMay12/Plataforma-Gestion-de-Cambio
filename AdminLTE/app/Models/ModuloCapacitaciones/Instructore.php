<?php

namespace App\Models\ModuloCapacitaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructore extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relacion uno a muchos
    public function cursos()
    {
        return $this->hasMany('App\Models\ModuloCapacitaciones\Curso');
    }

    //Relacion uno a uno inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
