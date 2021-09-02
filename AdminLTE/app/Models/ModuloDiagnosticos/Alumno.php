<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    public function profesores(){
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Profesor');
    }*/

    public function profesores(){
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Profesor');
    }
}
