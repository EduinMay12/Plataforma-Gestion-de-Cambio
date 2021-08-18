<?php

namespace App\Models\ModuloComunicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campana extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Models\ModuloAdministrador\Empresa');
    }

    public function sucursales()
    {
         return $this->belongsTo('App\Models\ModuloAdministrador\Sucursales');
    }

    public function comunicacion()
    {
        return $this->belongsTo('App\Models\ModuloComunicacion\Comunicacion');
    }

    public function elemento()
    {
        return $this->belongsTo('App\Models\ModuloComunicacion\Elemento');
    }
}
