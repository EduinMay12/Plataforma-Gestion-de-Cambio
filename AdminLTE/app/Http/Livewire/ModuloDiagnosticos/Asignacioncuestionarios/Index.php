<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionarios;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Asignacioncuestionario;
use App\Models\ModuloDiagnosticos\Cuestionario2;
use App\Models\ModuloDiagnosticos\Preguntas2;
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

        $asignacioncuestionarios = Asignacioncuestionario::select('asignacioncuestionarios.id','users.name','asignacioncuestionarios.fecha_asignada','asignacioncuestionarios.fecha_limite','asignacioncuestionarios.cuestionario_id')
            ->join('users','asignacioncuestionarios.participante_id','=','users.id')
            ->where('users.name', 'like', '%'. $this->search. '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.asignacioncuestionarios.index', compact('asignacioncuestionarios'));
    }

    public function create(){

        $this->users = User::all()->where('estatus', '=', '4');
        //$this->users1 = User::all()->where('estatus', '=', '4');
        $this->cuestionarios = Cuestionario2::all()->where('estatus', '=', '1');

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
        $this->validate([
            'participante_id' => 'required',
            'fecha_asignada' => 'required',
            'fecha_limite' => 'required',
            'cuestionario_id' => 'required'
        ]);

        Asignacioncuestionario::create([
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

    public function show(Asignacioncuestionario $asignacioncuestionario){

        $this->asignacioncuestionario = $asignacioncuestionario;

        $this->view = 'show';
    }

    public function edit(Asignacioncuestionario $asignacioncuestionario){

        $this->asignacion_id = $asignacioncuestionario->id;
        $this->participante_id = $asignacioncuestionario->participante_id;
        $this->fecha_asignada = $asignacioncuestionario->fecha_asignada;
        $this->fecha_limite = $asignacioncuestionario->fecha_limite;
        $this->cuestionario_id = $asignacioncuestionario->cuestionario_id;
        $this->users = User::all()->where('estatus', '=', '4');
        $this->cuestionarios = Cuestionario2::all()->where('estatus', '=', '1');

        $this->preguntas = Preguntas2::where('cuestionario_id', '=', $this->cuestionario_id)->get();
        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'participante_id' => 'required',
            'fecha_asignada' => 'required',
            'fecha_limite' => 'required',
            'cuestionario_id' => 'required'
        ]);

        $this->asignacion = Asignacioncuestionario::find($this->asignacion_id);

        $this->preguntas = Preguntas2::where('cuestionario_id', '=', $this->cuestionario_id)->get();
        
        $this->asignacion->update([
            'participante_id' => $this->participante_id,
            'fecha_asignada' => $this->fecha_asignada,
            'fecha_limite' => $this->fecha_limite,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->emit('alert', '¡Asignación actualizado con exito!');
    }


    public function destroy(Asignacioncuestionario $asignacioncuestionario){

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
