<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    public function alumnos(){
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Alumno');
    }*/

    public function alumnos(){
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Alumno');
    }
}
