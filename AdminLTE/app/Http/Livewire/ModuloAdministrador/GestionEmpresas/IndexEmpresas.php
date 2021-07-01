<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionEmpresas;

use Livewire\Component;
use App\Models\ModuloAdministrador\Empresa;
use Livewire\WithPagination;

class IndexEmpresas extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $empresas = Empresa::where('empresa', 'like' , '%' . $this->search . '%')
                    ->orWhere('id_persona', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate();

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
}
