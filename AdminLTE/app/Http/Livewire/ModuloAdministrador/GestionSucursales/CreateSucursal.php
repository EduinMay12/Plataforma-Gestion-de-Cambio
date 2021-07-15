<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionSucursales;

use Livewire\Component;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;

class CreateSucursal extends Component
{
    public $empresa_id;
    public $sucursal;
    public $user_id;
    public $direction;
    public $empleados;
    public $estado;
    public $d_asenta;
    public $d_ciudad;
    public $d_codigo;
    public $estatus;
    public $tamaño;

    public function render()
    {
        $users = User::all();
        $estados = Estados::all();
        $empresa = Empresa::all();
        return view('livewire.modulo-administrador.gestion-sucursales.create-sucursal', compact('empresa', 'estados', 'users'));
    }
}
