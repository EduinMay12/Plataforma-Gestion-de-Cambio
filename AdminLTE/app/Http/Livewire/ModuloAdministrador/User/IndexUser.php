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

class IndexUser extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '8';
    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'cant' => ['except' => '8'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $listeners = ['delete'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $empresa = Empresa::all();
        $users = User::all();
        $estados = Estados::all();
        $sucursal = Sucursales::all();
        $users = User::where('name', 'like' , '%' . $this->search . '%')
                    ->orWhere('email', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-administrador.user.index-user', compact('empresa', 'sucursal', 'estados', 'users'));
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
