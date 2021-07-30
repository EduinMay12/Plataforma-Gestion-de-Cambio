<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Grupos;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    //variables para filtro
    public $sort = 'id';
    public $direction = 'desc';
    public $search = '';
    public $cant = '5';
    public $categoria_id;
    public $curso_id;
    public $view = 'table';
    public $categoria;
    public $curso;
    public $grupo;
    public $identificador;

    //variables del crud
    public $grupo_id;
    public $nombre;
    public $imagen;
    public $descorta;
    public $fechaInicio;
    public $fechaFin;
    public $horarios;
    public $status;
    public $imagen_grupo;

    public function mount()
    {
        $this->identificador = rand();
    }

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
        $categorias = Categoria::where('status', '=', 1)->get();
        $cursos = Curso::where('categoria_id', '=', $this->categoria_id)
            ->where('status', '=', 1)
            ->get();
        $grupos = Grupo::where('curso_id', '=', $this->curso_id)
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);
        return view('livewire.modulo-capacitaciones.grupos.index', compact('categorias', 'cursos', 'grupos'));
    }

    public function table($categoria, $curso)
    {
        $this->categoria_id = $categoria;
        $this->curso_id = $curso;
        $this->view = 'table';
    }

    public function create(Categoria $categoria, Curso $curso)
    {
        $this->categoria = $categoria;
        $this->curso = $curso;
        $this->categoria_id = $categoria->id;
        $this->curso_id = $curso->id;
         $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'imagen' => 'required',
            'descorta' => 'required',
            'fechaInicio' => 'required',
            'fechaFin' => 'required',
            'horarios' => 'required',
            'status' => 'required',
            'curso_id' => 'required'
        ]);

        $imagen = $this->imagen->store('grupos');

        Grupo::create([
            'nombre' => $this->nombre,
            'imagen' => $imagen,
            'descorta' => $this->descorta,
            'fechaInicio' => $this->fechaInicio,
            'fechaFin' => $this->fechaFin,
            'horarios' => $this->horarios,
            'status' => $this->status,
            'curso_id' => $this->curso_id
        ]);

        $this->reset([
            'nombre',
            'imagen',
            'descorta',
            'fechaInicio',
            'fechaFin',
            'horarios',
            'status'
        ]);

        $this->identificador = rand();

        $this->emit('reset');

        $this->emit('alert', '!Se agregó el grupo con exito¡');

    }

    public function show(Grupo $grupo)
    {
        $this->grupo = $grupo;
        $this->view = 'show';
    }

    public function edit(Categoria $categoria, Curso $curso, Grupo $grupo)
    {
        $this->categoria = $categoria;
        $this->categoria_id = $categoria->id;
        $this->curso = $curso;
        $this->curso_id = $curso->id;
        $this->grupo = $grupo;
        $this->grupo_id = $grupo->id;
        $this->nombre = $grupo->nombre;
        $this->imagen_grupo = $grupo->imagen;
        $this->descorta = $grupo->descorta;
        $this->fechaInicio = $grupo->fechaInicio;
        $this->fechaFin = $grupo->fechaFin;
        $this->horarios = $grupo->horarios;
        $this->status = $grupo->status;

        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descorta' => 'required',
            'fechaInicio' => 'required',
            'fechaFin' => 'required',
            'horarios' => 'required',
            'status' => 'required',
            'curso_id' => 'required'
        ]);

        if ($this->imagen) {
            Storage::delete([$this->imagen_grupo]);
            $this->imagen_grupo = $this->imagen->store('grupos');
        }

        $grupo = Grupo::find($this->grupo_id);

        $grupo->update([
            'nombre' => $this->nombre,
            'imagen' => $this->imagen_grupo,
            'descorta' => $this->descorta,
            'fechaInicio' => $this->fechaInicio,
            'fechaFin' => $this->fechaFin,
            'horarios' => $this->horarios,
            'status' => $this->status,
            'curso_id' => $this->curso_id
        ]);

        $this->identificador = rand();

        $this->emit('alert', '!Se actualizó el grupo con exito¡');

    }

    public function destroy(Grupo $grupo)
    {
        $consulta = DB::table('matriculaciones')->where('grupo_id','=', $grupo->id)->get();
        $contador = count($consulta);

        if($contador > 0)
        {
            $this->emit('error', 'Este grupo no se puede eliminar, contiene matriculaciones');
        }else{
            Storage::delete([$grupo->imagen]);
            $grupo->delete();
            $this->emit('alert', '¡Grupo eliminado con exito!');
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
