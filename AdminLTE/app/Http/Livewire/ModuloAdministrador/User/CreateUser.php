<?php

namespace App\Http\Livewire\ModuloAdministrador\User;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $roles;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|unique:instructores',
        'roles' => 'required'
    ];

    public function save()
    {
        $this->validate();

        $this->emit('alert', '¡Se agregó el instructor con exito!');
    }
    public function render()
    {
        $empresa = Empresa::all();
        $sucursales = Sucursales::all();
        $estados = Estados::all();
        $roles = Role::all();
        return view('livewire.modulo-administrador.user.create-user', compact('empresa', 'estados', 'sucursales', 'roles'));
    }
}
