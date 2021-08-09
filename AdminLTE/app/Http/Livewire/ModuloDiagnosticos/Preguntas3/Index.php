<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Preguntas3;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\ModuloDiagnosticos\Preguntas3;
use App\Models\ModuloDiagnosticos\Cuestionario3;
use App\Models\ModuloDiagnosticos\Opciones2;

use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $view = 'table';
    public $cuestionario_id;
    public $deleteOpcion;
    //
    public $cuestionario3;
    public $pregunta;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    //public $opciones = [1,2,3,4,5];

    public $pregunta_id;
    public $textPregunta;
    public $descripcion;

    public $opcion_id;
    public $opciones;
    //public $opc;
    
    public $opcion;
    public $valor;
    public $explicacion;
    public $respuesta;

    public $opcion1;
    public $valor1;
    public $explicacion1;
    public $respuesta1;

    public $opcion2;
    public $valor2;
    public $explicacion2;
    public $respuesta2;

    public $opcion3;
    public $valor3;
    public $explicacion3;
    public $respuesta3;

    public $opcion4;
    public $valor4;
    public $explicacion4;
    public $respuesta4;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '5']
    ]; 

    protected $listeners = ['destroy'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $cuestionarios = Cuestionario3::all();

        $preguntas = Preguntas3::where('cuestionario_id', '=', $this->cuestionario_id)
                                ->where('textPregunta', 'like', '%' . $this->search . '%')
                                ->where('descripcion', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);
        return view('livewire.modulo-diagnosticos.preguntas3.index', compact('cuestionarios', 'preguntas'));
                            
    }

    //boton de regresar
    public function table($cuestionario3){
        $this->cuestionario_id = $cuestionario3;

        $this->reset([
            'textPregunta',
            'descripcion',
        ]);

        $this->emit('reset');
        $this->view = 'table';
    }

    public function create(Cuestionario3 $cuestionario3){
        $this->cuestionario3 = $cuestionario3;
        $this->cuestionario_id = $cuestionario3->id;

        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required',
            //'opcion' => 'required'
        ]);

        Preguntas3::create([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);


        $this->reset([
            'textPregunta',
            'descripcion',
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Se agregó la pregunta con exito!');

    }

    public function show(Preguntas3 $pregunta){
        $this->pregunta = $pregunta;
        $this->view = 'show';
    }

    public function edit(Cuestionario3 $cuestionario3, Preguntas3 $pregunta /*, Opciones1 $opcion*/){
        $this->cuestionario3 = $cuestionario3;
        $this->cuestionario_id = $cuestionario3->id; 

        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;
        $this->textPregunta = $pregunta->textPregunta;
        $this->descripcion = $pregunta->descripcion;

        $this->opciones = Opciones2::where('pregunta_id', '=', $this->pregunta_id)->get();

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required',
            'opcion' => 'required',
            'valor' => 'required',
            'explicacion' => 'required',
            'respuesta' => 'required',
            'pregunta_id' => 'required'
        ]);

        $pregunta = Preguntas3::find($this->pregunta_id);

        $pregunta->update([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        Opciones2::create([
            'opcion' => $this->opcion,
            'valor' => $this->valor,
            'explicacion' => $this->explicacion,
            'respuesta' => $this->respuesta,
            'pregunta_id' => $this->pregunta_id
        ]);

        Opciones2::create([
            'opcion' => $this->opcion1,
            'valor' => $this->valor1,
            'explicacion' => $this->explicacion1,
            'respuesta' => $this->respuesta1,
            'pregunta_id' => $this->pregunta_id
        ]);

        Opciones2::create([
            'opcion' => $this->opcion2,
            'valor' => $this->valor2,
            'explicacion' => $this->explicacion2,
            'respuesta' => $this->respuesta2,
            'pregunta_id' => $this->pregunta_id
        ]);

        Opciones2::create([
            'opcion' => $this->opcion3,
            'valor' => $this->valor3,
            'explicacion' => $this->explicacion3,
            'respuesta' => $this->respuesta3,
            'pregunta_id' => $this->pregunta_id
        ]);

        Opciones2::create([
            'opcion' => $this->opcion4,
            'valor' => $this->valor4,
            'explicacion' => $this->explicacion4,
            'respuesta' => $this->respuesta4,
            'pregunta_id' => $this->pregunta_id
        ]);

        $this->opciones = Opciones2::where('pregunta_id', '=', $this->pregunta_id)->get();


        $this->reset([
            'opcion',
            'valor',
            'explicacion',
            'respuesta',
            'opcion1',
            'valor1',
            'explicacion1',
            'respuesta1',
            'opcion2',
            'valor2',
            'explicacion2',
            'respuesta2',
            'opcion3',
            'valor3',
            'explicacion3',
            'respuesta3',
            'opcion4',
            'valor4',
            'explicacion4',
            'respuesta4'
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Se actualizó la pregunta con exito!');

    }

    public function destroy(Preguntas3 $pregunta){
        $pregunta->delete();
    }

    /*public function borrar(Opciones1 $opc, Preguntas1 $pregunta){
        $this->opcion = $opc;
        $this->opcion_id = $opcion->id;

        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

    }*/

    public function borrar(Opciones2 $opc){

        $opc->delete();

        $this->emit('alert', '¡La opción se borro con exito!');

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
