<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Categorias;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Categoria;
use Livewire\WithPagination;

class ShowCategorias extends Component
{

    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    protected $paginationTheme = "bootstrap";

    //resetea la pagina, al realizar una nueva busqueda
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categorias = Categoria::where('nombre', 'like' , '%' . $this->search . '%')
                    ->orWhere('descripcion', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate();

        return view('livewire.modulo-capacitaciones.categorias.show-categorias', compact('categorias'));
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
