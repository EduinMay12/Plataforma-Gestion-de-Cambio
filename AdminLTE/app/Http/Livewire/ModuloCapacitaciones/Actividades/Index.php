<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Actividades;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Leccione;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //variables para los filtros
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    public $curso_id;
    public $leccione_id;

    //variables del crud


    public function render()
    {
        $cursos = Curso::where('status', '=', 1)->get();

        $lecciones = Leccione::where('curso_id', '=', $this->curso_id)
                                ->where('status', '=', 1)
                                ->get();

        return view('livewire.modulo-capacitaciones.actividades.index', compact('cursos', 'lecciones'));
    }

    public function table()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }
}
