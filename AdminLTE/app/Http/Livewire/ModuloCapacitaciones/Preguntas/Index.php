<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Preguntas;

use App\Models\ModuloCapacitaciones\Cuestionario;
use App\Models\ModuloCapacitaciones\Pregunta;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    //variables para filtrar
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    public $cuestionario;
    public $pregunta;
    public $cuestionario_id;
    public $pregunta_id;

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

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = "bootstrap";

    protected $listeners = ['destroy'];

    protected $queryString = [
        'cant' => ['except' => '5'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];


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

    public function table($cuestionario)
    {
        $this->cuestionario_id = $cuestionario;
        $this->validate([
            'descripcion' => '',
            'textPregunta' => '',
            //opcion 1
            'opcion1' => '',
            'valor1' => '',
            'explicacion1' => '',
            //opcion 2
            'opcion2' => '',
            'valor2' => '',
            'explicacion2' => '',
            //opcion 3
            'opcion3' => '',
            'valor3' => '',
            'explicacion3' => '',
            //opcion 4
            'opcion4' => '',
            'valor4' => '',
            'explicacion4' => '',
            //opcion 5
            'opcion5' => '',
            'valor5' => '',
            'explicacion5' => '',
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

        $this->view = 'table';
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

        $valores = [$this->valor1, $this->valor2, $this->valor3, $this->valor4, $this->valor5];

        $contador1 = 0;
        $contador2 = 0;

        for($i=0; $i < count($valores); $i++){

            if($valores[$i] == 100){
                $contador1++;
            }elseif($valores[$i] != 0 && $valores[$i] != 100){
                $contador2++;
            }
        }

        if($contador2 > 0){
            $this->emit('error', 'las preguntas solo pueden tener valores de 0 y 100');
        }elseif($contador1 == 0){
            $this->emit('error', 'tienes que asignarle un valor de 100 a la respuesta correcta');
        }elseif($contador1 == 1){
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

        }elseif($contador1 > 1){
            $this->emit('error', 'solo puedes asignar un valor de 100');
        }

    }

    public function show(Pregunta $pregunta)
    {
        $this->pregunta = $pregunta;
        $this->view = 'show';
    }

    public function edit(cuestionario $cuestionario, Pregunta $pregunta)
    {
        $this->cuestionario = $cuestionario;
        $this->cuestionario_id = $cuestionario->id;
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;
        $this->descripcion = $pregunta->descripcion;
        $this->textPregunta = $pregunta->textPregunta;
        //opcion 1
        $this->opcion1 = $pregunta->opcion1;
        $this->valor1 = $pregunta->valor1;
        $this->explicacion1 = $pregunta->explicacion1;
        //opcion 2
        $this->opcion2 = $pregunta->opcion1;
        $this->valor2 = $pregunta->valor2;
        $this->explicacion2 = $pregunta->explicacion1;
        //opcion 3
        $this->opcion3 = $pregunta->opcion1;
        $this->valor3 = $pregunta->valor3;
        $this->explicacion3 = $pregunta->explicacion1;
        // opcion 4
        $this->opcion4 = $pregunta->opcion1;
        $this->valor4 = $pregunta->valor4;
        $this->explicacion4 = $pregunta->explicacion1;
        // opcion 5
        $this->opcion5 = $pregunta->opcion1;
        $this->valor5 = $pregunta->valor5;
        $this->explicacion5 = $pregunta->explicacion1;

        $this->view = 'edit';
    }

    public function update()
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

        $valores = [$this->valor1, $this->valor2, $this->valor3, $this->valor4, $this->valor5];

        $contador1 = 0;
        $contador2 = 0;

        for($i=0; $i < count($valores); $i++){

            if($valores[$i] == 100){
                $contador1++;
            }elseif($valores[$i] != 0 && $valores[$i] != 100){
                $contador2++;
            }
        }

        if($contador2 > 0){
            $this->emit('error', 'las preguntas solo pueden tener valores de 0 y 100');
        }elseif($contador1 == 0){
            $this->emit('error', 'tienes que asignarle un valor de 100 a la respuesta correcta');
        }elseif($contador1 == 1){

            $pregunta = Pregunta::find($this->pregunta_id);

            $pregunta->update([
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
                'explicacion5' => $this->explicacion5
            ]);
    
            $this->emit('alert', '!Se actualizó la pregunta con exito¡');

        }elseif($contador1 > 1){
            $this->emit('error', 'solo puedes asignar un valor de 100');
        }

    }

    public function destroy(Pregunta $pregunta)
    {
        $pregunta->delete();
        $this->emit('alert', '¡Pregunta eliminada con exito!');
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
