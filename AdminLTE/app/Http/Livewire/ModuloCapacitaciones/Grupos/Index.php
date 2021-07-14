<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Grupos;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    //variables para filtro
    public $sort;
    public $direction;
    public $categoria_id;
    public $curso_id;
    public $view = 'table';
    public $categoria;
    public $curso;
    public $grupo;

    //variables del crud
    public $nombre;
    public $imagen;
    public $descorta;
    public $fechaInicio;
    public $fechaFin;
    public $horarios;
    public $status;

    public function render()
    {
        $categorias = Categoria::all();
        $cursos = Curso::where('categoria_id', '=', $this->categoria_id)->get();
        $grupos = Grupo::all();
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

    }

    public function show(Grupo $grupo)
    {
        $this->grupo = $grupo;
        $this->view = 'show';
    }
}
