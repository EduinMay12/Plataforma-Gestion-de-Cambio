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
    public $user;
    public $email = '';
    public $password = '';
    public $roles;
    public $apellido;
    public $direccion;
    public $estatus;

    public $d_asenta;
    public $d_ciudad;

    public $puesto_actual_id;
    public $puesto_futuro_id;

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
        $empresas = Empresa::where('estatus', '=', 1)->get();
        $sucursales = Sucursales::where('empresa_id','=', $this->empresa_id)->where('estatus', '=', 1)->get();
        $users = User::all();
        $estados = Estados::all();
        $roles = Role::all();
        $users = User::where('name', 'like' , '%' . $this->search . '%')
                    ->orWhere('email', 'like' , '%' . $this->search . '%')
                    ->orWhere('empresa_id', 'like' , '%' . $this->search . '%')
                    ->orWhere('sucursal_id', 'like' , '%' . $this->search . '%')
                    ->orWhere('puesto_actual_id', 'like' , '%' . $this->search . '%')
                    ->orWhere('estatus', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);
        return view('livewire.modulo-administrador.user.index-user', compact('empresas', 'sucursales', 'estados', 'users', 'roles'));
    }

    public function table($sucursal_id, $empresa_id)
    {
        $this->sucursal_id = $sucursal;
        $this->empresa_id = $empresa;
        $this->view = 'table';
    }

    public function create(Empresa $empresa , Sucursales $sucursal, Role $roles)
    {
        $this->empresa = $empresa;
        $this->sucursal = $sucursal;
        $this->empresa_id = $empresa->empresa;
        $this->sucursal_id = $sucursal->sucursal;
        $this->view = 'create';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:email',
            'password' => 'required',
            'direccion' => 'required',

            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'empresa_id' => 'required',
            'sucursal_id' => 'required',
            'estatus' => 'required'
        ]);

        $this->password = Hash::make($this->password);

        User::create([
            'roles' => $this->roles,
            'name' => $this->name,
            'apellido' => $this->apellido,
            'direccion' => $this->direccion,
            'email' => $this->email,
            'password' => $this->password,

            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,

            'estatus' => $this->estatus,
            'empresa_id' => $this->empresa_id,
            'sucursal_id' => $this->sucursal_id

        ]);

        $this->reset([
            'roles',
            'name',
            'apellido',
            'direccion',
            'email',
            'password',

            'd_asenta',
            'd_ciudad',

            'empresa_id',
            'sucursal_id',
            'estatus'
        ]);

        $this->emit('alert', '!Se agregó un empleado con exito¡');

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
        $consulta = DB::table('empresas')->where('user_id','=', $users->id)->get();
        $contador = count($consulta);

        if($contador > 0)
        {
            $this->emit('error', 'Este usuario no se puede eliminar, contiene empresas y sucursales');
        }else{
            $users->delete();
            $this->emit('alert', 'Usuario eliminado con exito!');
        }
    }
}
