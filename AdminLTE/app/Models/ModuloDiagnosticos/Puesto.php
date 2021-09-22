<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function competencias(){
        //return $this->belongsToMany('App\Models\Competencia');
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Competencia', 'competencia_puesto', 'puesto_id', 'competencia_id')->withPivot('nivel_id');
    }
}

