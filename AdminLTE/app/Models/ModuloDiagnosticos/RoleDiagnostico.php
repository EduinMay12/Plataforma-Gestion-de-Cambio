<?php

namespace App\Models\ModuloDiagnosticos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleDiagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estatus',
    ];


    protected $guarded = [];

    /*public function asignaciondiagnosticos(){
        //hasOne
        return $this->hasMany('App\Models\ModuloDiagnosticos\AsignacionDiagnostico');
    }*/
} 
