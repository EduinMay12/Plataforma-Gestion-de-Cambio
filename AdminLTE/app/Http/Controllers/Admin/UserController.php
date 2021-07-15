<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ModuloAdministrador\Empresa;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\ModuloAdministrador\Sucursales;
use App\Models\Estados;

class UserController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-usuarios|crear-usuarios|editar-usuarios|eliminar-usuarios', ['only' => ['index','store']]);
         $this->middleware('permission:crear-usuarios', ['only' => ['create','store']]);
         $this->middleware('permission:editar-usuarios', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-usuarios', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(10);
        return view('modulo-administrador.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $empresa = Empresa::all();
        $sucursales = Sucursales::all();
        $estados = Estados::all();
        $roles = Role::pluck('name','name')->all();
        return view('modulo-administrador.users.create',compact('empresa', 'estados', 'sucursales', 'roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('gestionempleado.index')
                        ->with('success','¡Usuario Agregado con Exito!');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('modulo-administrador.users.show',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('modulo-administrador.users.edit',compact('user','roles','userRole'));
    }
    // funcion de actulizar personas
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','¡Usuario Actualizado con Exito!');
    }
    //Funcion deeliminar usuarios
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
