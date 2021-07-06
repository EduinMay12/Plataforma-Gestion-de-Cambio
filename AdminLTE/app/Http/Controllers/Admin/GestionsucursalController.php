<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;


class GestionsucursalController extends Controller
{
    public function index()
    {
        $users = User::all();
        $estados = Estados::all();
        $empresas = Empresa::all();
        return view('modulo-administrador.gestionsucursal.index', compact('empresas', 'estados', 'users'));
    }

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
            'empresa' => 'required',
            'sucursal' => 'required',
            'user_id' => 'required',
            'direccion' => 'required',
            'empleados' => 'required',

            'd_asenta' => 'required',
            'd_ciudad' => 'required',
            'd_codigo' => 'required',

            'estatus' => 'required',
            'tamaño' => 'required'
        ]);
        //funcion de crear
        Sucursales::create([
            'empresa' => $request->empresa,
            'sucursal' => $request->sucursal,
            'user_id' => $request->user_id,
            'direccion' => $request->empleados,
            'empleados' => $request->empleados,
            'd_asenta' => $request->d_asenta,
            'd_ciudad' => $request->d_ciudad,
            'd_codigo' => $request->d_codigo,
            'estatus' => $request->estatus,
            'tamaño' => $request->tamaño
        ]);

        return view('modulo-administrador.gestionsucursal.index', compact('empresas', 'estados', 'users'));
    }
        //Funcion de eliminar
        public function destroy($id)
        {
            Sucursales::destroy($id);

            return redirect('modulo-administrador/gestionsucursal/index')->with('flash_message', 'Eliminado!');
        }
}

