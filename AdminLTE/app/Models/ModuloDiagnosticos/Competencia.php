<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function puestos(){
        return $this->belongsToMany('App\Models\ModuloDiagnosticos\Puesto', 'competencia_puesto', 'competencia_id', 'puesto_id')->withPivot('nivel_id');
    }
}
