<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Matriculaciones;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //variables para filtro
    public $view = 'table';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    public $categoria;
    public $curso;
    public $grupo;
    public $categoria_id;
    public $curso_id;
    public $grupo_id;


    //variables del crud


    public function render()
    {
        $categorias = Categoria::where('status', '=', 1)->get();

        $cursos = Curso::where('categoria_id', '=', $this->categoria_id)
                        ->where('status', '=', 1)->get();

        $grupos = Grupo::where('curso_id', '=', $this->curso_id)
                        ->where('status', '=', 1)->get();

        $sucursales = Sucursales::where('estatus', '=', 1)->get();

        $roles = Role::all();

        $matriculaciones = DB::table('matriculaciones')->get();

        return view('livewire.modulo-capacitaciones.matriculaciones.index', compact('categorias', 'cursos', 'grupos', 'sucursales', 'roles','matriculaciones'));
    }

    public function create(Categoria $categoria, Curso $curso, Grupo $grupo)
    {
        $this->categoria = $categoria;
        $this->curso = $curso;
        $this->grupo = $grupo;

        $this->categoria_id = $categoria->id;
        $this->curso_id = $curso->id;
        $this->grupo_id = $grupo->id;

        $this->view = 'create';
    }
}
