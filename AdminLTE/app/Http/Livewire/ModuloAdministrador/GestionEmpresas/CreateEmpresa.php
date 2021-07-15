<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionEmpresas;

use Livewire\Component;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\User;
use App\Models\Estados;

class CreateEmpresa extends Component
{
    public $empresa;
    public $user_id;
    public $direction;
    public $empleados;
    public $d_asenta;
    public $d_ciudad;
    public $d_codigo;


    protected $rules = [
        'empresa' => 'required',
        'user_id' => 'required|unique:instructores',
        'direction' => 'required',
        'empleados' => 'required',
        'd_asenta' => 'required',
        'd_ciudad' => 'required',
        'd_codigo' => 'required'
    ];

    // Vista de con relacion entre usuarios y estados en las vistas del formulario del create
    public function render()
    {
        $users = User::all();
        $estados = Estados::all();
        return view('livewire.modulo-administrador.gestion-empresas.create-empresa', compact('estados', 'users'));
    }

    public function save()
    {
        $this->validate();

        Empresa::create([
            'empresa' => $this->empresa,
            'direction' => $this->direction,
            'user_id' => $this->user_id,
            'empleados' => $this->empleados,
            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,
            'd_codigo' => $this->d_codigo
        ]);

        $this->reset(['empresa', 'user_id', 'direction', 'empleados', 'd_asenta', 'd_ciudad', 'd_codigo']);

        $this->emit('alert', '¡Se agregó el instructor con exito!');
    }
}
