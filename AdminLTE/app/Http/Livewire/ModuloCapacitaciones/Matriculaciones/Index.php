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

    //seleccionar todos
    public $selectAll = false;
    public $identificador;
    //Arreglo de ids
    public $usersId = [];


    //variables del crud

    protected $listeners = ['destroy'];

    public function mount()
    {
        $this->identificador = rand();
    }

    public function render()
    {
        //obtener categorias
        $categorias = Categoria::where('status', '=', 1)->get();
        //obtener cursos segun categoria y status
        $cursos = Curso::where('categoria_id', '=', $this->categoria_id)
                        ->where('status', '=', 1)->get();
        //obtener grupos segun curso y status
        $grupos = Grupo::where('curso_id', '=', $this->curso_id)
                        ->where('status', '=', 1)->get();
        //obtener sucursales segun status
        $sucursales = Sucursales::where('estatus', '=', 1)->get();
        //obtener todos los roles
        $roles = Role::all();
        //obtener los usuarios matriculados
        $matriculaciones = DB::table('grupo_user')
                            ->select('grupo_user.id','users.name','users.apellido','grupo_user.user_id')
                            ->join('users','grupo_user.user_id','=','users.id')
                            ->where('grupo_user.grupo_id','=', $this->grupo_id)
                            ->get();
        //consulta de usuarios
        $participantes = $this->users;

        return view('livewire.modulo-capacitaciones.matriculaciones.index', compact('categorias', 'cursos', 'grupos', 'sucursales', 'roles','matriculaciones','participantes'));
    }

    public function table($categoria, $curso, $grupo)
    {
        $this->categoria_id = $categoria;
        $this->curso_id = $curso;
        $this->grupo_id = $grupo;
        $this->sucursal_id = '';
        $this->role_id = '';
        $this->usersId = [];
        $this->view = 'table';
    }

    public function create(Categoria $categoria, Curso $curso, Grupo $grupo)
    {
        // $users = DB::table('grupo_user')->select('user_id')->where('grupo_id','=', $grupo->id)->get();
        // $contador = count($users);
        // if($contador > 0){
        //     $users_id = json_decode($users, true);
        //     foreach($users_id as $user_id){
        //         $this->usersId[] = $user_id["user_id"];
        //     }
        // }
        
        // json_encode($this->users_id);
        //$arreglo = [];

        //$arreglo_users = json_encode($arreglo);

        //$this->users_id = $arreglo_users;

        $this->categoria = $categoria;
        $this->curso = $curso;
        $this->grupo = $grupo;

        $this->categoria_id = $categoria->id;
        $this->curso_id = $curso->id;
        $this->grupo_id = $grupo->id;

        $this->view = 'create';
    }

    public function store(){
        $contador  = count($this->usersId);
        
        if($contador == 0){
            $this->emit('error', 'Debes al menos seleccionar un usuario');

        }else{
            $grupo = Grupo::find($this->grupo_id);

            $grupo->users()->attach($this->usersId);

            $this->selectAll = false;

            $this->usersId = [];

            $this->emit('alert', '!Se agregó las matriculaciones con exito¡');
        }
    }

    public function destroy($user)
    {
        $grupo = Grupo::find($this->grupo_id);
        $grupo->users()->detach($user);
        $this->emit('alert', '¡Matriculacion eliminada con exito!');
    }

    public function getUsersProperty()
    {
        return User::select('users.name', 'users.apellido', 'users.id')
                    ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                    ->where('users.sucursal_id', '=', $this->sucursal_id)
                    ->where('model_has_roles.role_id', '=', $this->role_id)
                    ->get();
    }

    public function updatedSelectAll($value)
    {
        if($value){
            $this->usersId = $this->users->pluck('id')->map(fn($item) => (string) $item);
        }else{
            $this->usersId = [];
        }
    }

    public function updatedUsersId()
    {
        $this->selectAll = false;
    }

}
