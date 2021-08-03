<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\Cuestionario2;

class Cuestionario2Controller extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.cuestionario2s.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.cuestionario2s.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Cuestionario2 $cuestionario2)
    {
        return view('modulo-diagnosticos.cuestionario2s.show', compact('cuestionario2'));
    }

    public function edit(Cuestionario2 $cuestionario2)
    {
        return view('modulo-diagnosticos.cuestionario2s.edit', compact('cuestionario2'));
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
