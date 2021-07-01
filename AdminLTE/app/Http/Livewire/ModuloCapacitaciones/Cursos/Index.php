<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Cursos;

use App\Models\ModuloCapacitaciones\Categoria;
use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;

class Index extends Component
{
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '';
    public $categoria_id = '';

    public function render()
    {
        $categorias = Categoria::all();
        $cursos = Curso::where('categoria_id', '=', $this->categoria_id )->get();
        // $cursos = Curso::where('nombre', 'like' , '%' . $this->search . '%')
        //             ->orWhere('descorta', 'like' , '%' . $this->search . '%')
        //             ->orderBy($this->sort, $this->direction)
        //             ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.cursos.index', compact('categorias','cursos'));
    }
}
