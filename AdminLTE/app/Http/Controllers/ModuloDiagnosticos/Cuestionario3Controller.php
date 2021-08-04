<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\Cuestionario3;

class Cuestionario3Controller extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.cuestionario3s.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.cuestionario3s.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Cuestionario3 $cuestionario3)
    {
        return view('modulo-diagnosticos.cuestionario3s.show', compact('cuestionario3'));
    }

    public function edit(Cuestionario3 $cuestionario3)
    {
        return view('modulo-diagnosticos.cuestionario3s.edit', compact('cuestionario3'));
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
