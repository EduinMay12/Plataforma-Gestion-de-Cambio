<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Cursos;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\ModuloCapacitaciones\Leccione;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    use WithFileUploads;
    use WithPagination;

    //variable para cambiar vista
    public $view = 'table';

    //variables de filtros
    public $categoria_id = '';
    public $categoria;
    public $cant = '5';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    //variables del crud
    public $nombre;
    public $imagen;
    public $imagen_curso;
    public $descorta;
    public $deslarga;
    public $requisitos;
    public $horas;
    public $status;
    public $instructore_id;
    public $identificador;
    public $curso_id;
    public $curso;

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
        $instructores = Instructore::where('status', '=', 1)->get();

        $cursos = DB::table('cursos')
                    ->where('categoria_id', '=', $this->categoria_id)
                    ->where(function($query) {
                        $query->where('nombre', 'like', '%' . $this->search . '%')
                                ->orWhere('descorta', 'like', '%' . $this->search . '%');             
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.cursos.index', compact('categorias', 'cursos', 'instructores'));
    }

    public function table($categoria)
    {
        $this->categoria_id = $categoria;
        $this->validate([
            'nombre' => '',
            'imagen' => '',
            'descorta' => '',
            'deslarga' => '',
            'requisitos' => '',
            'horas' => '',
            'status' => '',
            'instructore_id' => ''
        ]);

        $this->reset([
            'nombre',
            'imagen',
            'descorta',
            'deslarga',
            'requisitos',
            'horas',
            'status',
            'instructore_id'
        ]);
        $this->identificador = rand();
        $this->view = 'table';
    }

    public function create(Categoria $categoria)
    {
        $this->categoria = $categoria;
        $this->categoria_id = $categoria->id;
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'imagen' => 'required',
            'descorta' => 'required',
            'deslarga' => 'required',
            'requisitos' => 'required',
            'horas' => 'required',
            'status' => 'required',
            'instructore_id' => 'required',
            'categoria_id' => 'required'
        ]);

        $imagen = $this->imagen->store('cursos');

        Curso::create([
            'nombre' => $this->nombre,
            'imagen' => $imagen,
            'descorta' => $this->descorta,
            'deslarga' => $this->deslarga,
            'requisitos' => $this->requisitos,
            'horas' => $this->horas,
            'status' => $this->status,
            'instructore_id' => $this->instructore_id,
            'categoria_id' => $this->categoria_id

        ]);

        $categoria = Categoria::find($this->categoria_id);
        $contador = $categoria->contador + 1;
        $categoria->update([
            'contador' => $contador
        ]);

        $this->reset([
            'nombre',
            'imagen',
            'descorta',
            'deslarga',
            'requisitos',
            'horas',
            'status',
            'instructore_id',
            'categoria_id'
        ]);

        $this->identificador = rand();

        $this->emit('alert', '!Se agregó el curso con exito¡');
    }

    public function show(Curso $curso)
    {
        $this->curso = $curso;
        $this->view = 'show';
    }

    public function edit(Categoria $categoria, Curso $curso)
    {
        $this->categoria = $categoria;
        $this->categoria_id = $categoria->id;
        $this->curso_id = $curso->id;
        $this->nombre = $curso->nombre;
        $this->imagen_curso = $curso->imagen;
        $this->descorta = $curso->descorta;
        $this->deslarga = $curso->deslarga;
        $this->requisitos = $curso->requisitos;
        $this->horas = $curso->horas;
        $this->status = $curso->status;
        $this->instructore_id = $curso->instructore_id;
        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descorta' => 'required',
            'deslarga' => 'required',
            'requisitos' => 'required',
            'horas' => 'required',
            'status' => 'required',
            'instructore_id' => 'required',
            'categoria_id' => 'required'
        ]);

        if ($this->imagen) {
            Storage::delete([$this->imagen_curso]);
            $this->imagen_curso = $this->imagen->store('cursos');
        }

        $curso = Curso::find($this->curso_id);

        $curso->update([
            'nombre' => $this->nombre,
            'imagen' => $this->imagen_curso,
            'descorta' => $this->descorta,
            'deslarga' => $this->deslarga,
            'requisitos' => $this->requisitos,
            'horas' => $this->horas,
            'status' => $this->status,
            'instructore_id' => $this->instructore_id,
            'categoria_id' => $this->categoria_id
        ]);

        $this->identificador = rand();

        $this->emit('alert', '!Se actualizó el curso con exito¡');
    }

    public function destroy(Curso $curso)
    {
        $lecciones = Leccione::where('curso_id', '=', $curso->id)->get();
        $contadorLecciones = count($lecciones);

        $grupos = Grupo::where('curso_id', '=', $curso->id)->get();
        $contadorGrupos = count($grupos);

        if ($contadorLecciones > 0) {
            $this->emit('error', 'Este curso no se puede eliminar, contiene lecciones');
        }elseif($contadorGrupos > 0){
            $this->emit('error', 'Este curso no se puede eliminar, contiene grupos');
        }else{
            //elimar la imagen
            Storage::delete([$curso->imagen]);
            //elimar curso
            $curso->delete();
            //actualizar contador
            $categoria = Categoria::find($curso->categoria_id);
            $contador = $categoria->contador - 1;
            $categoria->update([
                'contador' => $contador
            ]);

            $this->emit('alert', '¡Curso eliminado con exito!');
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
