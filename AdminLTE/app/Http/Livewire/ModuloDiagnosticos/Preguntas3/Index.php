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

    public $opcione;

    public $opcion9;
    public $valor9;
    public $explicacion9;
    public $respuesta9;
    
    public $opcion;
    public $valor = 0;
    public $explicacion;
    public $respuesta;

    public $opcion1;
    public $valor1 = 0;
    public $explicacion1;
    public $respuesta1;

    public $opcion2;
    public $valor2 = 0;
    public $explicacion2;
    public $respuesta2;

    public $opcion3;
    public $valor3 = 0;
    public $explicacion3;
    public $respuesta3;

    public $opcion4;
    public $valor4 = 0;
    public $explicacion4;
    public $respuesta4;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '5']
    ]; 

    protected $listeners = ['destroy', 'borrar'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $cuestionarios = Cuestionario3::all()->where('estatus', '=', '1');

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

        $consulta = DB::table('preguntas3s')
                        ->where('textPregunta', '=', $this->textPregunta)
                        ->where('cuestionario_id', '=', $this->cuestionario3->id)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'La pregunta que desea registrar, ¡Ya existe!');
        }else{
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

    public function table1(Preguntas3 $pregunta){
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

        return $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required'
        ]);

        $pregunta = Preguntas3::find($this->pregunta_id);

        $pregunta->update([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->emit('alert', '¡Se actualizó la pregunta con exito!');
        
    }

    public function update1(){
        $this->validate([
            'opcion' => 'required',
            'valor' => 'required',
            'explicacion' => 'required',
            'respuesta' => 'required',

            'opcion1' => 'required',
            'valor1' => 'required',
            'explicacion1' => 'required',
            'respuesta1' => 'required',

            'opcion2' => 'required',
            'valor2' => 'required',
            'explicacion2' => 'required',
            'respuesta2' => 'required',

            'opcion3' => 'required',
            'valor3' => 'required',
            'explicacion3' => 'required',
            'respuesta3' => 'required',

            'opcion4' => 'required',
            'valor4' => 'required',
            'explicacion4' => 'required',
            'respuesta4' => 'required',
        ]);

        $contadorOpcion = DB::table('opciones2s')
                ->where('pregunta_id','=', $this->pregunta->id)
                ->count('pregunta_id');

        $valores = [$this->valor, $this->valor1, $this->valor2,
                    $this->valor3, $this->valor4];
                
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
            $this->emit('error', 'Las preguntas solo pueden tener el valor 0 y 100');
        }elseif($contador1 == 0){
            $this->emit('error', 'La respuesta correcta debe tener un valor de 100');
        }elseif($contadorOpcion == 5){
            $this->emit('error', 'Las 5 opciones de la preguna, ¡Ya existen!');
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

        }elseif($contador1 == 1){
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

            $this->emit('alert', '¡Se agregarón las opciones con exito!');
    
        }elseif($contador1 > 1){
            $this->emit('error', 'Solo puedes asignar un valor de 100');
        }

        $this->opciones = Opciones2::where('pregunta_id', '=', $this->pregunta_id)->get();

    }

    public function editOpcion(Opciones2 $opcione, Preguntas3 $pregunta){
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

        $this->opcione = $opcione;
        $this->opcion_id = $opcione->id;
        $this->opcion9 = $opcione->opcion;
        $this->valor9 = $opcione->valor;
        $this->explicacion9 = $opcione->explicacion;
        $this->respuesta9 = $opcione->respuesta;

        return $this->view = 'opc';
    }

    public function update2(){
        $this->validate([
            'opcion9' => 'required',
            'valor9' => 'required',
            'explicacion9' => 'required',
            'respuesta9' => 'required',
            //'pregunta_id' => 'required'
        ]);

        $opcione = Opciones2::find($this->opcion_id);

        $opcione->update([
            'opcion' => $this->opcion9,
            'valor' => $this->valor9,
            'explicacion' => $this->explicacion9,
            'respuesta' => $this->respuesta9,
            //'pregunta_id' => $this->pregunta_id
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡La opción se actualizó con exito!');
    }

    public function destroy(Preguntas3 $pregunta){

        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

        $consulta = DB::table('opciones2s')->where('pregunta_id', '=', $pregunta->id)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'Se han generado las opciones de la pregunta, por lo tanto, no se puede eliminar');
        }else{
            $pregunta->delete($this->pregunta_id);
            $this->emit('alert', '¡La pregunta se ha eliminado con exito!');
        }

    }

    public function borrar(Opciones2 $opcion){
        $opcion->delete();
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
