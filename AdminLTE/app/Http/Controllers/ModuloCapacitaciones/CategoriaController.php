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
 
    }

    public function show(Categoria $categoria)
    {
        return view('modulo-capacitaciones.categorias.show', compact('categoria'));
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
 
    }
}
