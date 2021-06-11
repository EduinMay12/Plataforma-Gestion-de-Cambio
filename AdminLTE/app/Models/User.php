<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'puesto_actual_id',
        'puesto_futuro_id',
        'tipo_persona_id',
        'estado_id',
        'sucursal_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image(){

        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc(){

        return 'Hola Bienvenido a Gestion de Cambio';
    }

    public function adminlte_profile_url(){

        return 'perfil';
    }
}
