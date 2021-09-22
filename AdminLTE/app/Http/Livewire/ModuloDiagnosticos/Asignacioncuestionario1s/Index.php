<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Asignacioncuestionario1;
use App\Models\ModuloDiagnosticos\Cuestionario3;
use App\Models\ModuloDiagnosticos\Preguntas3;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $view = 'table';

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    public $users;
    public $cuestionarios;

    public $asignacion_id;
    public $asignacion;

    public $preguntas;
    public $textPregunta;

    public $participante_id;
    public $fecha_asignada;
    public $fecha_limite;
    public $cuestionario_id;

    public $asignacioncuestionario;
    public $asignacioncuestionario_id;
    

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

        $asignacioncuestionario1s = Asignacioncuestionario1::select('asignacioncuestionario1s.id','users.name','asignacioncuestionario1s.fecha_asignada','asignacioncuestionario1s.fecha_limite','asignacioncuestionario1s.cuestionario_id')
            ->join('users','asignacioncuestionario1s.participante_id','=','users.id')
            ->where('users.name', 'like', '%'. $this->search. '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.asignacioncuestionario1s.index', compact('asignacioncuestionario1s'));
    }

    public function create(){

        $this->users = User::all()->where('estatus', '=', '4');
        $this->cuestionarios = Cuestionario3::all()->where('estatus', '=', '1');

        $this->view = 'create';

    }

    public function table(){

        $this->validate([
            'participante_id' => '',
            'fecha_asignada' => '',
            'fecha_limite' => '',
            'cuestionario_id' => ''
        ]);

        $this->reset([
            'participante_id',
            'fecha_asignada',
            'fecha_limite',
            'cuestionario_id'
        ]);

        $this->emit('reset');

        $this->view = 'table';
    }

    public function store(){
        $this->validate(
            [
                'participante_id' => 'required',
                'fecha_asignada' => 'required',
                'fecha_limite' => 'required',
                'cuestionario_id' => 'required'
            ],
            [
                'participante_id.required' => 'El campo participante es requerido',
                'fecha_asignada.required' => 'El campo fecha inicio es requerido',
                'fecha_limite.required' => 'El campo fecha limite es requerido',
                'cuestionario_id.required' => 'El campo cuestionario es requerido'
            ],
        );

        Asignacioncuestionario1::create([
            'participante_id' => $this->participante_id,
            'fecha_asignada' => $this->fecha_asignada,
            'fecha_limite' => $this->fecha_limite,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->reset([
            'participante_id',
            'fecha_asignada',
            'fecha_limite',
            'cuestionario_id'
        ]);

        $this->emit('reset');

        $this->emit('alert', '¡Asignación se agregró con exito!');
    }

    public function show(Asignacioncuestionario1 $asignacioncuestionario){

        $this->asignacioncuestionario = $asignacioncuestionario;

        $this->view = 'show';
    }

    public function edit(Asignacioncuestionario1 $asignacioncuestionario){

        $this->asignacion_id = $asignacioncuestionario->id;
        $this->participante_id = $asignacioncuestionario->participante_id;
        $this->fecha_asignada = $asignacioncuestionario->fecha_asignada;
        $this->fecha_limite = $asignacioncuestionario->fecha_limite;
        $this->cuestionario_id = $asignacioncuestionario->cuestionario_id;
        $this->users = User::all()->where('estatus', '=', '4');
        $this->cuestionarios = Cuestionario3::all()->where('estatus', '=', '1');

        $this->preguntas = Preguntas3::where('cuestionario_id', '=', $this->cuestionario_id)->get();
        $this->view = 'edit';
    }

    public function update(){
        $this->validate(
            [
                'participante_id' => 'required',
                'fecha_asignada' => 'required',
                'fecha_limite' => 'required',
                'cuestionario_id' => 'required'
            ],
            [
                'participante_id.required' => 'El campo participante es requerido',
                'fecha_asignada.required' => 'El campo fecha inicio es requerido',
                'fecha_limite.required' => 'El campo fecha limite es requerido',
                'cuestionario_id.required' => 'El campo cuestionario es requerido'
            ],
        );

        $this->asignacion = Asignacioncuestionario1::find($this->asignacion_id);

        $this->preguntas = Preguntas3::where('cuestionario_id', '=', $this->cuestionario_id)->get();
        
        $this->asignacion->update([
            'participante_id' => $this->participante_id,
            'fecha_asignada' => $this->fecha_asignada,
            'fecha_limite' => $this->fecha_limite,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->emit('alert', '¡Asignación actualizado con exito!');
    }

    public function destroy(Asignacioncuestionario1 $asignacioncuestionario){

        $this->asignacioncuestionario = $asignacioncuestionario;
        $this->asignacioncuestionario_id = $asignacioncuestionario->id;

        $asignacioncuestionario->delete($this->asignacioncuestionario_id);

        $this->emit('alert', '¡La asignación se ha eliminado con exito!');
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
