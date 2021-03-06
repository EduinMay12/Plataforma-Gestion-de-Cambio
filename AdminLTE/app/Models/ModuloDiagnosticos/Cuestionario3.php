<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario3 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function preguntas()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\Preguntas3');
    }

    public function asignacioncuestionarios()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\Asignacioncuestionario1');
    }
}
