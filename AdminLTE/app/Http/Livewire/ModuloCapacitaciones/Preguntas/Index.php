<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Preguntas;

use App\Models\ModuloCapacitaciones\Cuestionario;
use App\Models\ModuloCapacitaciones\Pregunta;
use Livewire\Component;

class Index extends Component
{
    //variables para filtrar
    public $view = 'table';
    public $cuestionario_id;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $opciones = [1,2,3,4,5];

    public function render()
    {
        $cuestionarios = Cuestionario::all();
        $preguntas = Pregunta::where('cuestionario_id', '=', $this->cuestionario_id )
                ->where('textPregunta', 'like', '%' .$this->search . '%')
                ->where('descripcion', 'like', '%'. $this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.preguntas.index', compact('cuestionarios', 'preguntas'));
    }

    public function create()
    {
        $this->view = 'create';
    }
}
