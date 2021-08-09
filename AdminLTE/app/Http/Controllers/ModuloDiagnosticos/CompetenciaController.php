<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\Competencia;

class CompetenciaController extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.competencias.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.competencias.create'); 
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Competencia $competencia)
    {
        return view('modulo-diagnosticos.competencias.show', compact('competencia'));
    }

    public function edit(Competencia $competencia)
    {
        return view('modulo-diagnosticos.competencias.edit', compact('competencia'));
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
