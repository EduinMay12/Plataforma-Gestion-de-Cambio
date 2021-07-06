<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use App\Models\ModuloCapacitaciones\Instructore;
use Illuminate\Http\Request;
use App\Models\User;

class InstructoreController extends Controller
{

    public function index()
    {
        return view('modulo-capacitaciones.instructores.index');
    }

    public function create()
    {
        return view('modulo-capacitaciones.instructores.create');
    }

    public function store(Request $request)
    {
        
    }

    public function show(Instructore $instructore)
    {
        return view('modulo-capacitaciones.instructores.show', compact('instructore'));
    }

    public function edit(Instructore $instructore)
    {
        return view('modulo-capacitaciones.instructores.edit', compact('instructore'));
    }

    public function update(Request $request, Instructore $instructore)
    {
        
    }

    public function destroy(Instructore $instructore)
    {
        
    }
}
