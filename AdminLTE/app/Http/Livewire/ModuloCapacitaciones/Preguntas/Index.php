<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Preguntas;

use App\Models\ModuloCapacitaciones\Cuestionario;
use App\Models\ModuloCapacitaciones\Pregunta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    //variables para filtrar
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    public $cuestionario;
    public $cuestionario_id;

    //variables del crud
    public $descripcion;
    public $textPregunta;
    //opcion 1
    public $opcion1;
    public $valor1 = 0;
    public $explicacion1;
    //opcion 2
    public $opcion2;
    public $valor2 = 0;
    public $explicacion2;
    //opcion 3
    public $opcion3;
    public $valor3 = 0;
    public $explicacion3;
    //opcion 3
    public $opcion4;
    public $valor4 = 0;
    public $explicacion4;
    //opcion 5
    public $opcion5;
    public $valor5 = 0;
    public $explicacion5;


    public function render()
    {
        $cuestionarios = Cuestionario::all();
        $preguntas = DB::table('preguntas')
                    ->where('cuestionario_id', '=', $this->cuestionario_id)
                    ->where(function($query) {
                        $query->where('descripcion', 'like', '%' . $this->search . '%')
                                ->orWhere('textPregunta', 'like', '%' . $this->search . '%');             
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.preguntas.index', compact('cuestionarios', 'preguntas'));
    }

    public function create(Cuestionario $cuestionario)
    {
        $this->cuestionario = $cuestionario;
        $this->cuestionario_id = $cuestionario->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'required',
            'textPregunta' => 'required',
            //opcion 1
            'opcion1' => 'required',
            'valor1' => 'required',
            'explicacion1' => 'required',
            //opcion 2
            'opcion2' => 'required',
            'valor2' => 'required',
            'explicacion2' => 'required',
            //opcion 3
            'opcion3' => 'required',
            'valor3' => 'required',
            'explicacion3' => 'required',
            //opcion 4
            'opcion4' => 'required',
            'valor4' => 'required',
            'explicacion4' => 'required',
            //opcion 5
            'opcion5' => 'required',
            'valor5' => 'required',
            'explicacion5' => 'required',
        ]);

        Pregunta::create([
            'descripcion' => $this->descripcion,
            'textPregunta' => $this->textPregunta,
            //opcion 1
            'opcion1' => $this->opcion1,
            'valor1' => $this->valor1,
            'explicacion1' => $this->explicacion1,
            //opcion 2
            'opcion2' => $this->opcion2,
            'valor2' => $this->valor2,
            'explicacion2' => $this->explicacion2,
            //opcion 3
            'opcion3' => $this->opcion3,
            'valor3' => $this->valor3,
            'explicacion3' => $this->explicacion3,
            //opcion 4
            'opcion4' => $this->opcion4,
            'valor4' => $this->valor4,
            'explicacion4' => $this->explicacion4,
            //opcion 5
            'opcion5' => $this->opcion5,
            'valor5' => $this->valor5,
            'explicacion5' => $this->explicacion5,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->reset([
            'descripcion',
            'textPregunta',
            //opcion 1
            'opcion1',
            'valor1',
            'explicacion1',
            //opcion 2
            'opcion2',
            'valor2',
            'explicacion2',
            //opcion 3
            'opcion3',
            'valor3',
            'explicacion3',
            //opcion 4
            'opcion4',
            'valor4',
            'explicacion4',
            //opcion 5
            'opcion5',
            'valor5',
            'explicacion5',
        ]);

        $this->emit('alert', '!Se agregó la pregunta con exito¡');
    }
}
