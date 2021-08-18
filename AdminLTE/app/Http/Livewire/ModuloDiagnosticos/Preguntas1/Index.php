<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Preguntas1;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Preguntas1;
use App\Models\ModuloDiagnosticos\Cuestionario1;

use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $view = 'table';
    public $cuestionario_id;
    //
    public $cuestionario1;
    public $pregunta;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    public $opciones = [1,2,3,4,5];

    public $pregunta_id;
    public $textPregunta;
    public $descripcion;

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

        $cuestionarios = Cuestionario1::all();

        $preguntas = Preguntas1::where('cuestionario_id', '=', $this->cuestionario_id)
                                ->where('textPregunta', 'like', '%' . $this->search . '%')
                                ->where('descripcion', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);
        return view('livewire.modulo-diagnosticos.preguntas1.index', compact('cuestionarios', 'preguntas'));
    }

    //boton de regresar
    public function table($cuestionario1){
        $this->cuestionario_id = $cuestionario1;

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

    public function create(Cuestionario1 $cuestionario1){
        $this->cuestionario1 = $cuestionario1;
        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required'
        ]);

        Preguntas1::create([
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

    public function show(Preguntas1 $pregunta){
        $this->pregunta = $pregunta;
        $this->view = 'show';
    }

    public function edit(Cuestionario1 $cuestionario1, Preguntas1 $pregunta){
        $this->cuestionario1 = $cuestionario1;
        $this->cuestionario_id = $cuestionario1->id;
        $this->pregunta = $pregunta;
        $this->pregunta_id = $pregunta->id;
        $this->textPregunta = $pregunta->textPregunta;
        $this->descripcion = $pregunta->descripcion;

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'textPregunta' => 'required',
            'descripcion' => 'required',
            'cuestionario_id' => 'required'
        ]);

        $pregunta = Preguntas1::find($this->pregunta_id);

        $pregunta->update([
            'textPregunta' => $this->textPregunta,
            'descripcion' => $this->descripcion,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->emit('alert', '¡Se actualizó la pregunta con exito!');

    }

    public function destroy(Preguntas1 $pregunta){
        $pregunta->delete();
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
