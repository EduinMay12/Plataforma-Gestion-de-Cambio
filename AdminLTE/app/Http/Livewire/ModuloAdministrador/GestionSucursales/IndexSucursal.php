<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionSucursales;

use Livewire\Component;
use App\Models\ModuloAdministrador\Sucursales;
use App\Models\ModuloAdministrador\Empresa;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Estados;
use Livewire\WithPagination;

class IndexSucursal extends Component
{
    use WithPagination;
    //TABLA
    public $view = 'table';
    //FILTROS
    public $empresa_id = '';
    public $empresa;
    public $cant = '10';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    //CRUD
    public $sucursal_id;
    public $sucursal;
    public $user_id;
    public $direccion;
    public $empleados;
    public $estado;
    public $d_asenta;
    public $d_ciudad;
    public $d_codigo;
    public $estatus;
    public $tamaño;

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
        $empresas = Empresa::where('estatus', '=', 1)->get();
        $users = User::all();
        $estados = Estados::all();
        $sucursales = Sucursales::where('empresa_id', 'like' , '%' . $this->search . '%')
                    ->where('sucursal', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-administrador.gestion-sucursales.index-sucursal', compact('empresas', 'users', 'estados', 'sucursales'));
    }

    public function table($empresa)
    {
        $this->empresa_id = $empresa;
        $this->reset([
            'sucursal',
            'user_id',
            'direccion',
            'empleados',
            'estado',
            'd_asenta',
            'd_ciudad',
            'd_codigo',
            'estatus',
            'tamaño'
        ]);
        $this->identificar = rand();
        $this->view = 'table';
    }

    public function create(Empresa $empresa)
    {
        $this->empresa = $empresa;
        $this->empresa_id = $empresa->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'empresa_id' => 'required',
            'user_id' => 'required|unique:sucursales',
            'sucursal' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',
            'estado' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required',
            'estatus' => 'required',
            'tamaño' => 'required'
        ]);

        Sucursales::create([
            'sucursal' => $this->sucursal,
            'user_id' => $this->user_id,
            'direccion' => $this->direccion,
            'empleados' => $this->empleados,
            'estado' => $this->estado,
            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,
            'd_codigo' => $this->d_codigo,
            'estatus' => $this->estatus,
            'tamaño' => $this->tamaño,
            'empresa_id' => $this->empresa_id

        ]);

        $this->reset([
            'sucursal',
            'user_id',
            'direccion',
            'empleados',
            'estado',
            'd_asenta',
            'd_ciudad',
            'd_codigo',
            'estatus',
            'empresa_id',
            'tamaño'
        ]);

        $this->identificar = rand();

        $this->emit('alert', '!Se Agregó una Sucursal con Exito¡');

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

    public function show(Sucursales $sucursal)
    {
        $this->sucursal = $sucursal;
        $this->view = 'show';
    }

    public function edit(Empresa $empresa, Sucursales $sucursal)
    {
        $this->sucursal_id = $sucursal->id;
        $this->sucursal = $sucursal->sucursal;
        $this->empresa = $empresa->empresa;
        $this->empresa_id = $sucursal->empresa_id;
        $this->user_id = $sucursal->user_id;
        $this->direccion = $sucursal->direccion;
        $this->empleados = $sucursal->empleados;
        $this->estado = $sucursal->estado;
        $this->estatus = $sucursal->estatus;
        $this->tamaño = $sucursal->tamaño;
        $this->d_asenta = $sucursal->d_asenta;
        $this->d_codigo = $sucursal->d_codigo;
        $this->d_ciudad = $sucursal->d_ciudad;
        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'empresa_id' => 'required',
            'user_id' => 'required',
            'sucursal' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',
            'estado' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required',
            'estatus' => 'required',
            'tamaño' => 'required'
        ]);

        $sucursal = Sucursales::find($this->sucursal_id);

        $sucursal->update([
            'sucursal' => $this->sucursal,
            'user_id' => $this->user_id,
            'direccion' => $this->direccion,
            'empleados' => $this->empleados,
            'estado' => $this->estado,
            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,
            'd_codigo' => $this->d_codigo,
            'estatus' => $this->estatus,
            'tamaño' => $this->tamaño,
            'empresa_id' => $this->empresa_id
        ]);

        $this->identificador = rand();

        $this->emit('alert', '!Se actualizó el sucursal con exito¡');

    }

    public function delete(Sucursales $sucursal)
    {
        $sucursal->delete();
    }
}
