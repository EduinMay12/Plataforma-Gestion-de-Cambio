<?php

namespace App\Http\Livewire\ModuloAdministrador\GestionSucursales;

use Livewire\Component;
use App\Models\ModuloAdministrador\Sucursales;
use Livewire\WithPagination;

class IndexSucursal extends Component
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
        $sucursales = Sucursales::where('sucursal', 'like' , '%' . $this->search . '%')
                    ->orWhere('user_id', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate();

        return view('livewire.modulo-administrador.gestion-sucursales.index-sucursal', compact('sucursales'));
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
