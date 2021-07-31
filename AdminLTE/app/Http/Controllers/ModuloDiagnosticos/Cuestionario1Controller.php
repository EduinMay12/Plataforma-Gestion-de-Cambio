<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModuloDiagnosticos\Cuestionario1;

class Cuestionario1Controller extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.cuestionario1s.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.cuestionario1s.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Cuestionario1 $cuestionario1)
    {
        return view('modulo-diagnosticos.cuestionario1s.show', compact('cuestionario1'));
    }

    public function edit(Cuestionario1 $cuestionario1)
    {
        return view('modulo-diagnosticos.cuestionario1s.edit', compact('cuestionario1'));
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
