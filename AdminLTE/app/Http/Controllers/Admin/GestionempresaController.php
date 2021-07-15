<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloAdministrador\Empresa;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\User;
use App\Models\Estados;

class GestionempresaController extends Controller
{
    //Perimisos de vitas
    function __construct()
    {
         $this->middleware('permission:ver-gestion-empresa|crear-gestion-empresa|editar-gestion-empresa|eliminar-gestion-empresa', ['only' => ['index','store']]);
         $this->middleware('permission:crear-gestion-empresa', ['only' => ['create','store']]);
         $this->middleware('permission:editar-gestion-empresa', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-gestion-empresa', ['only' => ['destroy']]);
    }
    //Vista Index de empresa
    public function index()
    {
        return view('modulo-administrador.gestionempresa.index');
    }
    //Vista del Create empresas y relacion con la tabla de User
    public function create()
    {
        //Tabla users Para la vista enla creacion.
        return view('modulo-administrador.gestionempresa.create');
    }
    //constructor del create Y validacion de formulario
    public function store(Request $request)
    {
        $users = User::all();
        $estados = Estados::all();
        //Validacion del formulario
        $request->validate([
            'empresa' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',
            'user_id' => 'required',
            'estatus' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required'
        ]);
        //funcion de crear
        Empresa::create([
            'empresa' => $request->empresa,
            'direccion' => $request->empleados,
            'empleados' => $request->empleados,
            'user_id' => $request->user_id,
            'estatus' => $request->estatus,
            'd_asenta' => $request->d_asenta,
            'd_ciudad' => $request->d_ciudad,
            'd_codigo' => $request->d_codigo
        ]);

        return redirect()->route('gestionempresa.index', compact('estados', 'users'))->with('message', '¡Empresa Agregado con Exito!');
    }
    //Funcion de eliminar
    public function destroy($id)
    {
        Empresa::destroy($id);

        return redirect('modulo-administrador/gestionempresa')->with('message', 'Empresa Eliminado con Exito!');
    }
    //Funcion de editar
    public function edit(Empresa $empresa)
    {
        $user = User::all();
        $estados = Estados::all();

        return view('modulo-administrador.gestionempresa.edit', compact('estados', 'empresa', 'user'));
    }
    //Funcion de actualizar informacion
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->empresa = $request->empresa;
        $empresa->user_id = $request->user_id;
        $empresa->direccion = $request->direccion;
        $empresa->empleados = $request->empleados;
        $empresa->d_asenta = $request->d_asenta;
        $empresa->d_ciudad = $request->d_ciudad;
        $empresa->d_codigo = $request->d_codigo;
        $empresa->estatus = $request->estatus;
        $empresa->save();

        return redirect()->route('gestionempresa.index', $empresa)->with('message', '¡Empresa Actualizado con Exito!');
    }
   //Funcion de ver la informacion
    public function show(Empresa $empresa)
    {
        return view('modulo-administrador.gestionempresa.show', compact('empresa'));
    }

}
