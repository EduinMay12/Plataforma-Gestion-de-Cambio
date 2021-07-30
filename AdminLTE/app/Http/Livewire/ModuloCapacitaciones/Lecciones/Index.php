<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Lecciones;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Leccione;
use App\Models\ModuloCapacitaciones\Recurso;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;

    //variables para filtros
    public $view = 'table';
    public $curso_id;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    public $curso;
    public $leccione;
    public $leccione_id;

    //variables del curso
    public $nombre;
    public $descripcion;
    public $objetivo;
    public $status;

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
        $cursos  = Curso::where('status', '=', 1)->get();
        $lecciones = Leccione::where('curso_id', '=', $this->curso_id)
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.lecciones.index', compact('cursos', 'lecciones'));
    }

    public function table($curso)
    {
        $this->curso_id = $curso;
        $this->validate([
            'nombre' => '',
            'descripcion' => '',
            'objetivo' => '',
            'status' => ''
        ]);
        $this->reset(['nombre', 'descripcion', 'objetivo', 'status']);
        $this->view = 'table';
    }

    public function create(Curso $curso)
    {
        $this->curso = $curso;
        $this->curso_id = $curso->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
            'status' => 'required'
        ]);

        Leccione::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'objetivo' => $this->objetivo,
            'status' => $this->status,
            'curso_id' => $this->curso_id
        ]);

        $this->reset(['nombre', 'descripcion', 'objetivo', 'status']);

        $this->emit('alert', '!Se agregó la lección con exito¡');
    }

    public function show(Leccione $leccione)
    {
        $this->leccione = $leccione;
        $this->view = 'show';
    }

    public function edit(Curso $curso,Leccione $leccione)
    {
        $this->curso = $curso;
        $this->curso_id = $curso->id;
        $this->leccione = $leccione;
        $this->leccione_id = $leccione->id;
        $this->nombre = $leccione->nombre;
        $this->descripcion = $leccione->descripcion;
        $this->objetivo = $leccione->objetivo;
        $this->status = $leccione->status;
        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
            'status' => 'required'
        ]);

        $leccione = Leccione::find($this->leccione_id);

        $leccione->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'objetivo' => $this->objetivo,
            'status' => $this->status,
            'curso_id' => $this->curso_id,
        ]);

        $this->emit('alert', '!Se actualizó la lección con exito¡');
    }

    public function destroy(Leccione $leccione)
    {
        $recursos = Recurso::where('leccione_id', '=', $leccione->id)->get();
        $contadorRecursos = count($recursos);

        $actividades = DB::table('actividades')->where('leccione_id','=', $leccione->id)->get();
        $contadorActividades = count($actividades);

        if ($contadorRecursos > 0) {
            $this->emit('error', 'Esta Lección no se puede eliminar, contiene recursos');
        }elseif($contadorActividades > 0){
            $this->emit('error', 'Este curso no se puede eliminar, contiene grupos');
        }else{
            $leccione->delete();
            $this->emit('alert', '¡Lección eliminada con exito!');
        }
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
