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
        $users = User::all();
        return view('modulo-capacitaciones.instructores.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|unique:instructores',
            'resena' => 'required',
            'status' => 'required'
        ]);

        Instructore::create([
            'user_id' => $request->user_id,
            'resena' => $request->resena,
            'status' => $request->status
        ]);

        return redirect()->route('instructores.index')->with('message', '¡Instructor agregado con exito!');
    }

    public function show(Instructore $instructore)
    {
        return view('modulo-capacitaciones.instructores.show', compact('instructore'));
    }

    public function edit(Instructore $instructore)
    {
        $users = User::all();
        return view('modulo-capacitaciones.instructores.edit', compact('instructore', 'users'));
    }

    public function update(Request $request, Instructore $instructore)
    {
        $request->validate([
            'user_id' => 'required',
            'resena' => 'required',
            'status' => 'required'
        ]);

        $instructore->user_id = $request->user_id;
        $instructore->resena = $request->resena;
        $instructore->status = $request->status;
        $instructore->save();

        return redirect()->route('instructores.edit', $instructore)->with('message','¡Intructor modificado con exito!');
    }

    public function destroy(Instructore $instructore)
    {
        $instructore->delete();

        return redirect()->route('instructores.index')->with('message', '¡Instructor eliminado con exito!');
    }
}
