<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Matriculaciones;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Categoria;
use App\Models\ModuloCapacitaciones\Curso;
use App\Models\ModuloCapacitaciones\Grupo;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Role;
use App\Models\User;
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

    public $role_id;
    public $sucursal_id;


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

        $participantes = User::select('users.name', 'users.apellido')
                ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                ->where('users.sucursal_id', '=', 'Sucursal')
                ->where('model_has_roles.role_id', '=', $this->role_id)
                ->get();

        return view('livewire.modulo-capacitaciones.matriculaciones.index', compact('categorias', 'cursos', 'grupos', 'sucursales', 'roles','matriculaciones', 'participantes'));
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
