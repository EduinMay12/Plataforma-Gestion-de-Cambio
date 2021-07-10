<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Cursos;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Instructore;
use Illuminate\Support\Facades\Storage;
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
    public $cant = '10';
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
        'cant' => ['except' => '10'], 
        'sort' => ['except' => 'id'], 
        'direction' => ['except' => 'desc'], 
        'search' => ['except' => '']
    ];

    public function render()
    {
        
        $categorias = Categoria::all();
        $instructores = Instructore::all();
        $cursos = Curso::where('categoria_id', '=', $this->categoria_id )
                ->where('nombre', 'like', '%' .$this->search . '%')
                ->where('descorta', 'like', '%'. $this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.cursos.index', compact('categorias','cursos', 'instructores'));
    }

    public function table($categoria)
    {
        $this->categoria_id = $categoria;
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

    public function create(Categoria $categoria){
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

    public function edit( Categoria $categoria , Curso $curso)
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
        Storage::delete([$curso->imagen]);
        $curso->delete();
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
