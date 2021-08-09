<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Respuestas1;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\ModuloDiagnosticos\Respuestas1;
use App\Models\ModuloDiagnosticos\Preguntas1;

class Index extends Component
{

    use WithPagination;

    //Filtrar por pregunta id
    public $view = 'table';
    public $pregunta_id;


    public $pregunta;
    public $respuesta;
    public $respuesta_id;

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

        $preguntas = Preguntas1::all();

        $respuestas = Respuestas1::where('pregunta_id', '=', $this->pregunta_id)
                                ->where('textRespuesta', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);
        return view('livewire.modulo-diagnosticos.respuestas1.index', compact('preguntas', 'respuestas'));
    }

    public function table($pregunta){
        $this->pregunta_id = $pregunta;

        $this->reset([
            'textRespuesta'
        ]);

        $this->emit('reset');
        
        $this->view = 'table';
    }

    public function create(Preguntas1 $pregunta){
        $this->pregunta = $pregunta;
        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'textRespuesta' => 'required',
            'pregunta_id' => 'required'
        ]);

        Respuestas1::create([
            'textRespuesta' => $this->textRespuesta,
            'pregunta_id' => $this->pregunta_id
        ]);

        $this->reset([
            'textRespuesta'
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Se agregó la respuesta con exito!');
    }

    public function show(Respuestas1 $respuesta){
        $this->respuesta = $respuesta;
        $this->view = 'show';
    }

    public function edit(Preguntas1 $pregunta, Respuestas1 $respuesta){
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;

        $this->respuesta = $respuesta;
        $this->respuesta_id = $respuesta->id;
        $this->textRespuesta = $respuesta->textRespuesta;

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'textRespuesta' => 'required',
            'pregunta_id' => 'required'
        ]);

        $respuesta = Respuestas1::find($this->respuesta_id);

        $respuesta->update([
            'textRespuesta' => $this->textRespuesta,
            'pregunta_id' => $this->pregunta_id
        ]);

        $this->emit('alert', 'Se actualizó la respuesta con exito');
    }

    public function destroy(Respuestas1 $respuesta){
        $respuesta->delete();
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