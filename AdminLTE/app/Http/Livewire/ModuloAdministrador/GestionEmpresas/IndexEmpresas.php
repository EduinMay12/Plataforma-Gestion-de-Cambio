<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionEmpresas;

use Livewire\Component;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\User;
use App\Models\Estados;
use Livewire\WithPagination;

class IndexEmpresas extends Component
{
    use WithPagination;
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';

    public $empresa_id;
    public $empresa;
    public $user_id;
    public $direccion;
    public $empleados;
    public $d_asenta;
    public $d_ciudad;
    public $d_codigo;
    public $estatus;

    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $rules = [
        'empresa' => 'required',
        'user_id' => 'required|unique:user',
        'direccion' => 'required',
        'estatus' => 'required',
        'empleados' => 'required',
        'd_asenta' => 'required',
        'd_ciudad' => 'required',
        'd_codigo' => 'required'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount()
    {
        $this->identificador = rand();
    }

    protected $listeners = ['delete'];

    public function render()
    {
        $users = User::all();
        $estados = Estados::all();
        $empresas = Empresa::where('empresa', 'like' , '%' . $this->search . '%')
                    ->orWhere('user_id', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);
        return view('livewire.modulo-administrador.gestion-empresas.index-empresas', compact('empresas', 'estados', 'users'));
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

    public function delete(Empresa $empresa)
    {
        $empresa->delete();
    }

    public function show(Empresa $empresa)
    {
        $this->empresa = $empresa;
        $this->view = 'show';
    }

    public function table()
    {
        $this->view = 'table';
    }

    public function create()
    {
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'empresa' => 'required',
            'user_id' => 'required|unique:empresas',
            'direccion' => 'required',
            'empleados' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required',
            'estatus' => 'required'
        ]);

        Empresa::create([
            'empresa' => $this->empresa,
            'direccion' => $this->direccion,
            'user_id' => $this->user_id,
            'estatus' => $this->estatus,
            'empleados' => $this->empleados,
            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,
            'd_codigo' => $this->d_codigo
        ]);

        $this->reset([
            'empresa',
            'user_id',
            'direccion',
            'empleados',
            'd_asenta',
            'd_ciudad',
            'd_codigo',
            'estatus'
        ]);

        $this->emit('alert', '¡Se agregó una empresa con exito!');
    }

    public function edit(Empresa $empresa)
    {
        $this->empresa_id = $empresa->id;
        $this->empresa = $empresa->empresa;
        $this->user_id = $empresa->user_id;
        $this->direccion = $empresa->direccion;
        $this->empleados = $empresa->empleados;
        $this->estatus = $empresa->estatus;
        $this->d_asenta = $empresa->d_asenta;
        $this->d_codigo = $empresa->d_codigo;
        $this->d_ciudad = $empresa->d_ciudad;
        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'empresa' => 'required',
            'user_id' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',
            'estatus' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required'
        ]);

        $empresa = Empresa::find($this->empresa_id);

        $empresa->update([
            'empresa' => $this->empresa,
            'user_id' => $this->user_id,
            'direccion' => $this->direccion,
            'empleados' => $this->empleados,
            'd_asenta' => $this->d_asenta,
            'd_ciudad' => $this->d_ciudad,
            'd_codigo' => $this->d_codigo,
            'estatus' => $this->estatus
        ]);
        $this->identificador = rand();
        $this->emit('alert', '!Se actualizó el empresa con exito¡');

    }
}
