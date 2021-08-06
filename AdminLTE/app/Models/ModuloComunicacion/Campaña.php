<?php

namespace App\Models\ModuloComunicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaña extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comunicacion()
    {
        return $this->hasMany('App\Models\ModuloComunicacion\Comunicacion');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function empresas()
    {
        return $this->hasMany('App\Models\ModuloAdministrador\Empresa');
    }

    public function sucursal()
    {
         return $this->hasMany('App\Models\ModuloAdministrador\Sucursales');
    }
}
