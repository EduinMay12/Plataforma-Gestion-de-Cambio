<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionEmpresas;

use Livewire\Component;
use App\Models\ModuloAdministrador\Empresa;
use Livewire\WithPagination;

class IndexEmpresas extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['delete'];

    public function render()
    {
        $empresas = Empresa::where('empresa', 'like' , '%' . $this->search . '%')
                    ->orWhere('user_id', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-administrador.gestion-empresas.index-empresas', compact('empresas'));
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
}
