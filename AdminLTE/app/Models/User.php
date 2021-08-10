<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloComunicacion\Comunicacion;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido',
        'direccion',
        'estatus',
        'email',
        'password',

        'puesto_actual_id',
        'puesto_futuro_id',
        'tipo',

        'd_asenta',
        'd_ciudad',
        'tipo',

        'sucursal_id',
        'empresa_id',

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

        return './uploads/avatars/{{ auth()->user()->avatar }}';
    }

    public function adminlte_desc(){

        return 'Hola Bienvenido a Gestion de Cambio';
    }

    public function empresa()
    {
         return $this->hasMany('App\Models\ModuloAdministrador\Empresa');
    }

    public function sucursales()
    {
         return $this->hasMany('App\Models\ModuloAdministrador\Sucursales');
    }

    public function asignaciondiagnosticos()
    {
        return $this->hasMany('App\Models\ModuloDiagnosticos\AsignacionDiagnostico');
    }

    public function asignacioncuestionario()
    {
        return $this->hasOne('App\Models\ModuloDiagnosticos\Asignacioncuestionario');
    }

}
