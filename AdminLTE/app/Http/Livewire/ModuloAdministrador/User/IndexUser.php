<?php

namespace App\Http\Livewire\ModuloAdministrador\User;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class IndexUser extends Component
{
    use WithPagination;
    //TABLA
    public $view = 'table';
    //FILTROS
    public $cant = '10';
    public $sucursal = '';
    public $empresa = '';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    //CRUD
    public $name;
    public $sucursal_id;
    public $empresa_id;
    public $email;
    public $password;
    public $roles;
    public $apellido;
    public $direccion;
    public $estatus;

    public $d_asenta;
    public $d_ciudad;

    public $puesto_actual_id;
    public $puesto_futuro_id;

    public function mount()
    {
        $this->identificar = rand();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = "bootstrap";

    protected $listeners = ['delete'];

    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    public function render()
    {
        $empresas = Empresa::all();
        $users = User::all();
        $estados = Estados::all();
        $sucursales = Sucursales::all();
        $users = User::where('name', 'like' , '%' . $this->search . '%')
                    ->orWhere('email', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-administrador.user.index-user', compact('empresas', 'sucursales', 'estados', 'users'));
    }

    public function table($sucursal_id, $empresa_id)
    {
        $this->sucursal_id = $sucursal;
        $this->empresa_id = $empresa;
        $this->reset([
            'sucursal_id',
            'empresa_id',
            'name',
            'apellido',
            'roles',
            'email',
            'direccion',
            'password',
            'confirm-password',
            'd_asenta',
            'd_ciudad',
            'estatus',
            'puesto_futuro_id',
            'puesto_actual_id'
        ]);
        $this->identificar = rand();
        $this->view = 'table';
    }

    public function create(Empresa $empresa , Sucursales $sucursal)
    {
        $this->empresa = $empresa;
        $this->sucursal = $sucursal;
        $this->empresa_id = $empresa->id;
        $this->sucursal_id = $sucursal->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'direccion' => 'required',

            'd_asenta' => 'required',
            'd_ciudad' => 'required',

            'empresa_id' => 'required',
            'sucursal_id' => 'required',
            'estatus' => 'required'
        ]);

        User::create([
            'empresa_id' => $this->empresa_id,
            'sucursal_id' => $this->sucursal_id,
            'roles' => $this->roles,
            'name' => $this->name,
            'apellido' => $this->apellido,
            'direccion' => $this->direccion,
            'email' => $this->email,
            'password' => $this->password,
            'confirm-password' => $this->confirm-password,

            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,

            'estatus' => $this->estatus,
            'empresa_id' => $this->empresa_id,
            'sucursal_id' => $this->empresa_id

        ]);

        $this->reset([
            'roles',
            'empresa_id',
            'sucursal_id',
            'name',
            'apellido',
            'direccion',
            'email',
            'password',
            'confirm-password',

            'd_asenta',
            'd_ciudad',

            'empresa_id',
            'sucursal_id',
            'estatus'
        ]);

        $this->identificar = rand();

        $this->emit('alert', '!Se agregó el curso con exito¡');

    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }

        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function delete(User $users)
    {
        $users->delete();
    }
}
