<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Categorias;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ShowCategorias extends Component
{

    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'cant' => ['except' => '5'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $listeners = ['delete'];

    //resetea la pagina, al realizar una nueva busqueda
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categorias = Categoria::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('descripcion', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

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

    public function delete(Categoria $categoria)
    {
        $cursos = Curso::where('categoria_id', '=', $categoria->id)->get();
        $contador = count($cursos);

        if ($contador > 0) {
            $this->emit('error', 'Esta categoria no se puede eliminar, contiene cursos');
        } else {
            Storage::delete([$categoria->imagen]);
            $categoria->delete();
            $this->emit('alert', '¡Categoria eliminada con exito!');
        }

    }
}
