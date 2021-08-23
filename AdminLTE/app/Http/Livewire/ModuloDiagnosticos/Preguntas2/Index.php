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
    public $valor = 0;
    public $explicacion;
    public $respuesta;

    public $opcion1;
    public $valor1 = 0;
    public $explicacion1;
    public $respuesta1;

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

        $this->validate([
            'textPregunta' => '',
            'descripcion' => ''
        ]);

        $this->reset([
            'textPregunta',
            'descripcion',
        ]);

        $this->emit('reset');
        
        $this->view = 'table';
    }

    public function create(Cuestionario2 $cuestionario2){
        $this->cuestionario2 = $cuestionario2;
        $this->cuestionario_id = $cuestionario2->id;

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


        $this->reset([
            'textPregunta',
            'descripcion',
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
            'cuestionario_id' => 'required'
        ]);

        $pregunta = Preguntas2::find($this->pregunta_id);

        $pregunta->update([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->emit('alert', '¡Se actualizó la pregunta con exito!');

    }

    public function update1(){
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

        $valores = [$this->valor, $this->valor1];

        $contador1 = 0;
        $contador2 = 0;

        for($i = 0; $i < count($valores); $i++){
            if($valores[$i] == 100){
                $contador1++;
            }elseif($valores[$i] != 0 && $valores[$i] != 100){
                $contador2++;
            }
        }

        if($contador2 > 0){
            $this->emit('error', 'Las preguntas solo pueden tener el valor de 0 y 100');
        }elseif($contador1 == 0){
            $this->emit('error', 'La respuesta correcta debe tener un valor de 100');
        }elseif($contador1 == 1){
            Opciones1::create([
                'opcion' => $this->opcion,
                'valor' => $this->valor,
                'explicacion' => $this->explicacion,
                'respuesta' => $this->respuesta,
                'pregunta_id' => $this->pregunta_id
            ]);
    
            Opciones1::create([
                'opcion' => $this->opcion1,
                'valor' => $this->valor1,
                'explicacion' => $this->explicacion1,
                'respuesta' => $this->respuesta1,
                'pregunta_id' => $this->pregunta_id
            ]);

    
            $this->reset([
                'opcion',
                'valor',
                'explicacion',
                'respuesta',
                'opcion1',
                'valor1',
                'explicacion1',
                'respuesta1'
            ]);
    
            $this->emit('alert', '¡Se agregarón las opciones con exito!');
    
        }elseif($contador1 > 1){
            $this->emit('error', 'Solo se puede agregar a una opción el valor de 100');
        }

        $this->opciones = Opciones1::where('pregunta_id', '=', $this->pregunta_id)->get();
    
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

    public function borrar(Opciones1 $opciones){

        $opciones->delete($this->pregunta_id);

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
