<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacioncuestionario extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuestionario(){
        return $this->belongsTo('App\Models\ModuloDiagnosticos\Cuestionario2');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
