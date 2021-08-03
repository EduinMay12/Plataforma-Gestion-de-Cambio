<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Preguntas2;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\ModuloDiagnosticos\Preguntas2;
use App\Models\ModuloDiagnosticos\Cuestionario2;
use App\Models\ModuloDiagnosticos\Opciones1;

use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $view = 'table';
    public $cuestionario_id;
    //
    public $cuestionario2;
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

        $cuestionarios = Cuestionario2::all();

        $preguntas = Preguntas2::where('cuestionario_id', '=', $this->cuestionario_id)
                                ->where('textPregunta', 'like', '%' . $this->search . '%')
                                ->where('descripcion', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);
        return view('livewire.modulo-diagnosticos.preguntas2.index', compact('cuestionarios', 'preguntas'));
                            
    }

    //boton de regresar
    public function table($cuestionario2){
        $this->cuestionario_id = $cuestionario2;
        $this->view = 'table';
    }

    public function create(Cuestionario2 $cuestionario2){
        $this->cuestionario2 = $cuestionario2;
        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required',
            //'opcion' => 'required'
        ]);

        Preguntas2::create([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        /*
        Opciones1::create([
            'opcion' => $this->opcion
        ]);*/

        $this->reset([
            'textPregunta',
            'descripcion',
            //'opcion'
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Se agregó la pregunta con exito!');

    }

    public function show(Preguntas2 $pregunta){
        $this->pregunta = $pregunta;
        $this->view = 'show';
    }

    public function edit(Cuestionario2 $cuestionario2, Preguntas2 $pregunta /*, Opciones1 $opcion*/){
        $this->cuestionario2 = $cuestionario2;
        $this->cuestionario_id = $cuestionario2->id;

        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;
        $this->textPregunta = $pregunta->textPregunta;
        $this->descripcion = $pregunta->descripcion;

        $this->opciones = Opciones1::where('pregunta_id', '=', $this->pregunta_id)->get();

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

        $pregunta = Preguntas2::find($this->pregunta_id);

        $pregunta->update([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        Opciones1::create([
            'opcion' => $this->opcion,
            'valor' => $this->valor,
            'explicacion' => $this->explicacion,
            'respuesta' => $this->respuesta,
            'pregunta_id' => $this->pregunta_id
        ]);

        $this->opciones = Opciones1::where('pregunta_id', '=', $this->pregunta_id)->get();


        $this->reset([
            'opcion',
            'valor',
            'explicacion',
            'respuesta'
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Se actualizó la pregunta con exito!');

    }

    public function destroy(Preguntas2 $pregunta){
        $pregunta->delete();
    }

    /*public function borrar(Opciones1 $opc, Preguntas1 $pregunta){
        $this->opcion = $opc;
        $this->opcion_id = $opcion->id;

        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

    }*/

    public function borrar(Opciones1 $opc){

        $opc = $opc->delete();

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
