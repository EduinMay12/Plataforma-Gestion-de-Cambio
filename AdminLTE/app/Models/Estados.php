<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'd_codigo',
        'd_asenta',
        'd_tipo_asenta',
        'd_mnpio',
        'd_estado',
        'd_ciudad',
        'd_cp',
        'c_estado',
        'c_oficina',
        'c_cp',
        'c_tipo_asenta',
        'c_mnpio',
        'id_asenta_cpcons',
        'd_zona',
        'c_tipo_asenta'
    ];
}
