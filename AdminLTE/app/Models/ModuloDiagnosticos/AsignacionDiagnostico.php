<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDiagnostico extends Model
{
    use HasFactory; 

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /*public function roldiagnostico(){
        return $this->belongsTo('App\Models\ModuloDiagnosticos\RoleDiagnostico');
    }*/
}
