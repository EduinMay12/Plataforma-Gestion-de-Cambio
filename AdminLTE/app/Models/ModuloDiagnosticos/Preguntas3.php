<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas3 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuestionario()
    {
        return $this->belongsTo('App\Models\ModuloDiagnosticos\Cuestionario3');
    }

    public function opciones(){
        return $this->hasMany('App\Models\ModuloDiagnosticos\Opciones2');
    }

    public function respuestas(){
        return $this->hasMany('App\Models\ModuloDiagnosticos\Respuestas3');
    }
}
