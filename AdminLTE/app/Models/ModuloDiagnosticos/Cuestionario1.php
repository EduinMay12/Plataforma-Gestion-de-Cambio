<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario1 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function preguntas()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\Preguntas1');
    }

    public function asignacioncuestionarios()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\Asignacioncuestionarioabierto');
    }

}
