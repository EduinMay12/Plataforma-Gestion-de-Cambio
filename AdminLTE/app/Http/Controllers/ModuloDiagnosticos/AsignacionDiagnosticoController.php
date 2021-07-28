<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\AsignacionDiagnostico;

class AsignacionDiagnosticoController extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.asignacion-diagnostico.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.asignacion-diagnostico.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(AsignacionDiagnostico $asignaciondiagnostico)
    {
        return view('modulo-diagnosticos.asignacion-diagnostico.show', compact('asignaciondiagnostico'));
    }

    public function edit(AsignacionDiagnostico $asignaciondiagnostico)
    {
        return view('modulo-diagnosticos.asignacion-diagnostico.edit', compact('asignaciondiagnostico')); 
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
