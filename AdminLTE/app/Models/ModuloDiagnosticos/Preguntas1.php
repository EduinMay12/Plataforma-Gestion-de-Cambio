<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas1 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuestionario()
    {
        return $this->belongsTo('App\Models\ModuloDiagnosticos\Cuestionario1');
    }

    public function respuestas(){
        return $this->hasMany('App\Models\ModuloDiagnosticos\Respuestas1');
    }
}
