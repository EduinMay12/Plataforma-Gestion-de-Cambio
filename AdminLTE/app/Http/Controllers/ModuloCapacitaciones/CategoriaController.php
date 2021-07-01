<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloCapacitaciones\Categoria;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{

    public function index()
    {
        return view('modulo-capacitaciones.categorias.index');
    }

    public function create()
    {
        return view('modulo-capacitaciones.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'status' => 'required'
        ]);

        $imagen = $request->file('imagen')->store('categorias');
        //$url = Storage::url($imagen);

        $contador = 0;

        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagen,
            'contador' => $contador,
            'status' => $request->status
        ]);

        return redirect()->route('categorias.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Categoria $categoria)
    {
        return view('modulo-capacitaciones.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        
        return redirect()->route('categorias.index');
    }
}
