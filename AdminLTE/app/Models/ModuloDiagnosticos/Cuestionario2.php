<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario2 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function preguntas()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\Preguntas2');
    }
}
