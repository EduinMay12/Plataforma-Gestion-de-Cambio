<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;


class GestionsucursalController extends Controller
{
    // Vista de roles
    function __construct()
    {
         $this->middleware('permission:ver-gestion-sucursal|crear-gestion-sucursal|editar-gestion-sucursal|eliminar-gestion-sucursal', ['only' => ['index','store']]);
         $this->middleware('permission:crear-gestion-sucursal', ['only' => ['create','store']]);
         $this->middleware('permission:editar-gestion-sucursal', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-gestion-sucursal', ['only' => ['destroy']]);
    }
    // Vista de la tabla de sucursales
    public function index()
    {
        $users = User::all();
        $estados = Estados::all();
        $empresas = Empresa::all();
        return view('modulo-administrador.gestionsucursal.index', compact('empresas', 'estados', 'users'));
    }
    // funcion crear empresas
    public function create()
    {
        $users = User::all();
        $estados = Estados::all();
        $empresas = Empresa::all();
        return view('modulo-administrador.gestionsucursal.create', compact('empresas', 'estados', 'users'));
    }
    //constructor del create Y validacion de formulario
    public function store(Request $request)
    {
        $users = User::all();
        $estados = Estados::all();
        $empresas = Empresa::all();
        //Validacion del formulario
        $request->validate([
            'empresa_id' => 'required',
            'sucursal' => 'required',
            'user_id' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',

            'estado' => 'required',
            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required',

            'estatus' => 'required',
            'tamaño' => 'required'
        ]);
        //funcion de crear
        Sucursales::create([
            'empresa_id' => $request->empresa_id,
            'sucursal' => $request->sucursal,
            'user_id' => $request->user_id,
            'direccion' => $request->empleados,
            'empleados' => $request->empleados,
            'estado' => $request->estado,
            'd_asenta' => $request->d_asenta,
            'd_ciudad' => $request->d_ciudad,
            'd_codigo' => $request->d_codigo,
            'estatus' => $request->estatus,
            'tamaño' => $request->tamaño
        ]);

        return view('modulo-administrador.gestionsucursal.index', compact('empresas', 'estados', 'users'))->with('message', 'Sucursal Agregado con Exito!');
    }
        //Funcion de eliminar
        public function destroy($id)
        {
            Sucursales::destroy($id);
            return redirect('modulo-administrador/gestionsucursal/index')->with('flash_message', 'Eliminado!');
        }
}

