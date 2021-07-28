<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\Competencia;
use App\Models\ModuloDiagnosticos\Nivel;

class PuestoController extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.puestos.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.puestos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Puesto $puesto)
    {
        return view('modulo-diagnosticos.puestos.show', compact('puesto'));
    }

    public function edit(Puesto $puesto)
    {
        return view('modulo-diagnosticos.puestos.edit', compact('puesto'));
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    } 

    public function recuperar(Request $request, Puesto $puesto){

        $nivel_id = $request->nivel_id;
        $puesto->competencias()->attach($request->competencia, ['nivel_id' => $nivel_id]);

        return redirect()->route('puestos.edit', $puesto);
    }

    public function borrar(Request $request, Puesto $puesto){


        $nivel_id = $request->nivel_id;
        $puesto->competencias()->detach($request->competencia, ['nivel_id' => $nivel_id]);

        return redirect()->route('puestos.edit', $puesto);
    }
}
