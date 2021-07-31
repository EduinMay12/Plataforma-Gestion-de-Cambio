<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloDiagnosticos\Nivel;

class NivelController extends Controller 
{
    public function index()
    {
        return view('modulo-diagnosticos.niveles.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.niveles.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Nivel $nivele)
    {
        return view('modulo-diagnosticos.niveles.show', compact('nivele'));
    }


    public function edit(Nivel $nivele)
    {
        return view('modulo-diagnosticos.niveles.edit', compact('nivele'));
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
