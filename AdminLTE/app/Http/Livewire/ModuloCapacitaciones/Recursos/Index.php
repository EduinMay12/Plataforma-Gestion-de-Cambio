<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Recursos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Leccione;
use App\Models\ModuloCapacitaciones\Recurso;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;

    //variables para los filtros
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    public $curso_id;

    //variables del crud
    public $curso;
    public $leccione;
    public $recurso;
    public $recurso_id;
    public $nombre;
    public $descripcion;
    public $tipo;
    public $url;
    public $status;
    public $leccione_id;

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

        $recursos = DB::table('recursos')
                ->where('leccione_id', '=', $this->leccione_id)
                ->where(function($query) {
                    $query->where('nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('descripcion', 'like', '%'. $this->search. '%');
                })
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.recursos.index', compact('cursos', 'lecciones', 'recursos'));
    }

    public function table($curso, $leccione)
    {
        $this->curso_id = $curso;
        $this->leccione_id = $leccione;
        $this->validate([
            'nombre' => '',
            'descripcion' => '',
            'tipo' => '',
            'url' => '',
            'status' => ''
        ]);
        $this->reset(['nombre', 'descripcion', 'tipo', 'url', 'status']);
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
            'tipo' => 'required',
            'url' => 'required|url',
            'status' => 'required'
        ]);

        Recurso::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'tipo' => $this->tipo,
            'url' => $this->url,
            'status' => $this->status,
            'leccione_id' => $this->leccione_id
        ]);

        $this->reset(['nombre', 'descripcion', 'tipo', 'url', 'status']);

        $this->emit('alert', '!Se agregó el recurso con exito¡');
    }

    public function show(Recurso $recurso)
    {
        $this->recurso = $recurso;
        $this->view = 'show';
    }

    public function edit(Curso $curso, Leccione $leccione, Recurso $recurso)
    {
        $this->curso = $curso;
        $this->curso_id = $curso->id;
        $this->leccione = $leccione;
        $this->leccione_id = $leccione->id;
        $this->recurso = $recurso;
        $this->recurso_id = $recurso->id;
        $this->nombre = $recurso->nombre;
        $this->descripcion = $recurso->descripcion;
        $this->tipo = $recurso->tipo;
        $this->url = $recurso->url;
        $this->status = $recurso->status;

        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'url' => 'required|url',
            'status' => 'required'
        ]);

        $recurso = Recurso::find($this->recurso_id);

        $recurso->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'tipo' => $this->tipo,
            'url' => $this->url,
            'status' => $this->status,
            'leccione_id' => $this->leccione_id
        ]);

        $this->emit('alert', '!Se actualizó el recurso con exito¡');
    }

    public function destroy(Recurso $recurso)
    {
        $recurso->delete();
        $this->emit('alert', '¡Recurso eliminado con exito!');
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
