<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\RoleDiagnostico;

class RoleDiagnosticoController extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.role-diagnostico.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.role-diagnostico.create');
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(RoleDiagnostico $roldiagnostico)
    {
        return view('modulo-diagnosticos.role-diagnostico.show', compact('roldiagnostico'));
    }

    public function edit(RoleDiagnostico $roldiagnostico)
    {
        return view('modulo-diagnosticos.role-diagnostico.edit', compact('roldiagnostico'));
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
