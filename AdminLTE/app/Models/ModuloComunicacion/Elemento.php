<?php

namespace App\Models\ModuloComunicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
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
}
