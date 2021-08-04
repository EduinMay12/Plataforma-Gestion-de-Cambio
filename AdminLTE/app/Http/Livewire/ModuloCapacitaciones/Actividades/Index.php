<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Actividades;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Leccione;
use App\Models\ModuloCapacitaciones\Actividade;
use App\Models\ModuloCapacitaciones\Cuestionario;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //variables para los filtros
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    public $curso;
    public $leccione;
    public $actividade;
    public $curso_id;
    public $leccione_id;

    //variables del crud
    public $actividade_id;
    public $nombre;
    public $descripcion;
    public $status;
    public $cuestionario_id;

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
        $cursos = Curso::where('status', '=', 1)->get();

        $lecciones = Leccione::where('curso_id', '=', $this->curso_id)
                                ->where('status', '=', 1)
                                ->get();

        $cuestionarios = Cuestionario::where('status', '=', 1)->get();
        
        $actividades = DB::table('actividades')
                        ->where('leccione_id', '=', $this->leccione_id)
                        ->where(function($query) {
                                $query->where('nombre', 'like', '%' . $this->search . '%')
                                    ->orWhere('descripcion', 'like', '%'. $this->search. '%');       
                                })
                        ->orderBy($this->sort, $this->direction)
                        ->paginate($this->cant);
                
        return view('livewire.modulo-capacitaciones.actividades.index', compact('cursos', 'lecciones','cuestionarios','actividades'));
    }

    public function table($curso, $leccione)
    {
        $this->curso_id = $curso;
        $this->leccione_id = $leccione;
        $this->validate([
            'nombre' => '',
            'descripcion' => '',
            'status' => '',
            'cuestionario_id' => ''
        ]);
        $this->reset(['nombre', 'descripcion', 'status', 'cuestionario_id']);
        $this->view = 'table';
    }

    public function create(Curso $curso, Leccione $leccione)
    {
        $this->curso = $curso;
        $this->leccione = $leccione;
        $this->curso_id = $curso->id;
        $this->leccione_id = $leccione->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'status' => 'required',
            'cuestionario_id' => 'required'
        ]);

        Actividade::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'status' => $this->status,
            'leccione_id' => $this->leccione_id,
            'cuestionario_id' => $this->cuestionario_id
        ]);

        $this->reset(['nombre', 'descripcion', 'status', 'cuestionario_id']);

        $this->emit('alert','!Se agregó la actividad con exito¡');
    }

    public function show(Actividade $actividade)
    {
        $this->actividade = $actividade;
        $this->view = 'show';
    }

    public function edit(Curso $curso, Leccione $leccione, Actividade $actividade)
    {
        $this->curso = $curso;
        $this->curso_id = $curso->id;
        $this->leccione = $leccione;
        $this->leccione_id = $leccione->id;
        $this->actividade = $actividade;
        $this->actividade_id = $actividade->id;
        $this->nombre = $actividade->nombre;
        $this->descripcion = $actividade->descripcion;
        $this->cuestionario_id = $actividade->cuestionario_id;
        $this->status = $actividade->status;

        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'status' => 'required',
            'cuestionario_id' => 'required'
        ]);

        $actividade = Actividade::find($this->actividade_id);

        $actividade->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'status' => $this->status,
            'cuestionario_id' => $this->cuestionario_id,
            'leccione_id' => $this->leccione_id
        ]); 

        $this->emit('alert', '!Se actualizó la actividad con exito¡');
    }

    public function destroy(Actividade $actividade)
    {
        $actividade->delete();
        $this->emit('alert', '¡Actividad eliminada con exito!');
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
