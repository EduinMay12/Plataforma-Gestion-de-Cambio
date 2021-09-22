<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Respuestas2;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\DB;

use App\Models\ModuloDiagnosticos\Respuestas2;
use App\Models\ModuloDiagnosticos\Preguntas2;
use App\Models\ModuloDiagnosticos\Opciones1;
use App\Models\ModuloDiagnosticos\Cuestionario2;

class Index extends Component
{

    use WithPagination;

    //Filtrar por pregunta id
    public $view = 'table';
    public $pregunta_id;
    public $user_id;

    public $pregunta;
    public $respuesta;
    public $respuesta_id;

    public $opciones;

    public $textRespuesta;


    public $search  = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

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


        //$preguntas = Preguntas2::all();
        /*$preguntas = DB::table('preguntas2s')
        ->select('preguntas2s.id','preguntas2s.textPregunta')
        ->join('cuestionario2s',function($join){
            $join->on('preguntas2s.cuestionario_id','=','cuestionario2s.id')
                ->where('cuestionario2s.estatus','=',1);
            })->get();*/

        $preguntas = DB::table(DB::raw('preguntas2s p'))
        ->distinct()
        ->select('p.id','p.textPregunta','c.nombre')
        ->join(DB::raw('opciones1s o'),'o.pregunta_id','=','p.id')
        ->join(DB::raw('cuestionario2s c'),function($join) {$join->on('p.cuestionario_id','=','c.id')
        
        ->where('c.estatus','=',1)
        ; })
        ->orderBy('c.nombre','ASC')
        ->get();


        $respuestas = DB::table(DB::raw('respuestas2s r'))
        ->select('r.id','r.textRespuesta','p.textPregunta','u.name')
        ->join(DB::raw('preguntas2s p'),function($join) {
            $join->on('p.id','=','r.pregunta_id')
        ->where('r.pregunta_id','=',$this->pregunta_id);
        })->where(function($query){
            $query->where('textRespuesta', 'like', '%' . $this->search . '%');
        })
        ->join(DB::raw('users u'),'r.user_id','=','u.id')
        ->orderBy($this->sort, $this->direction)
        ->paginate($this->cant);
        return view('livewire.modulo-diagnosticos.respuestas2.index', compact('preguntas', 'respuestas'));
    }

    public function table($pregunta){
        $this->pregunta_id = $pregunta;

        $this->validate([
            'textRespuesta' => ''
        ]);

        $this->reset([
            'textRespuesta'
        ]);

        $this->emit('reset');

        $this->view = 'table';
    }

    public function create(Preguntas2 $pregunta){
        $this->user_id = auth()->user()->id;
        $this->pregunta = $pregunta;

        $this->opciones = Opciones1::where('pregunta_id', '=', $this->pregunta->id)->get();

        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'textRespuesta' => 'required',
            'pregunta_id' => 'required'
        ]);

            Respuestas2::create([
                'textRespuesta' => $this->textRespuesta,
                'pregunta_id' => $this->pregunta_id,
                'user_id' => $this->user_id
            ]);
    
            $this->reset([
                'textRespuesta'
            ]);
    
            $this->emit('reset');
    
            $this->emit('alert', '¡Se agregó la respuesta con exito!');
    }

    public function show(Respuestas2 $respuesta){
        $this->respuesta = $respuesta;
        $this->view = 'show';
    }

    public function edit(Preguntas2 $pregunta, Respuestas2 $respuesta){
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

        $this->respuesta = $respuesta;
        $this->respuesta_id = $respuesta->id;
        $this->textRespuesta = $respuesta->textRespuesta;

        $this->opciones = Opciones1::where('pregunta_id', '=', $this->pregunta_id)->get();

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'textRespuesta' => 'required',
            'pregunta_id' => 'required'
        ]);

        $respuesta = Respuestas2::find($this->respuesta_id);

        $respuesta->update([
            'textRespuesta' => $this->textRespuesta,
            'pregunta_id' => $this->pregunta_id
        ]);

        $this->emit('alert', 'Se actualizó la respuesta con exito');
    }

    public function destroy(Respuestas2 $respuesta){

        $this->respuesta = $respuesta;
        $this->respuesta_id = $respuesta->id;

        $respuesta->delete($this->respuesta_id);

        $this->emit('alert', '¡La respuesta se ha eliminado con exito!');
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
