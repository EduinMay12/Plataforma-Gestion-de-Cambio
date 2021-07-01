<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloAdministrador\Empresa;
use Illuminate\Support\Facades\Storage;
use DB;

class GestionempresaController extends Controller
{
    public function index()
    {
        return view('modulo-administrador.gestionempresa.index');
    }

    public function create()
    {
        return view('modulo-administrador.gestionempresa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'empresa' => 'required',
            'empleados' => 'required',
            'id_persona' => 'required',
            'id_estado' => 'required',
            'id_colonia' => 'required',
            'id_ciudad' => 'required',
            'id_codigo' => 'required'
        ]);

        Empresa::create([
            'empresa' => $request->empresa,
            'empleados' => $request->empleados,
            'id_persona' => $request->id_persona,
            'id_estado' => $request->id_estado,
            'id_colonia' => $request->id_colonia,
            'id_ciudad' => $request->id_ciudad,
            'id_codigo' => $request->id_codigo
        ]);

        return redirect()->route('gestionempresa.index');
    }

    public function destroy($id)
    {
        Empresa::destroy($id);

        return redirect('modulo-administrador/gestionempresa')->with('flash_message', 'Eliminar competencia!');
    }
}
