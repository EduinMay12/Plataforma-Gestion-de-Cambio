<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\ModuloDiagnosticos\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('modulo-diagnosticos.articulos.index', compact('articulos'));
    }

    public function create()
    {
        return view('modulo-diagnosticos.articulos.create');
    }


    public function store(Request $request)
    {
        $articulo = New Articulo();
        $articulo->nombre = $request->get('nombre');
        $articulo->categoria = $request->get('categoria');
        $articulo->save();

        Alert::success('Buen trabajo', '¡Articulo registrado con exito!');

        return view('modulo-diagnosticos.articulos.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $articulo = Articulo::find($id);

        return view('modulo-diagnosticos.articulos.edit', compact('articulo'));
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->nombre = $request->get('nombre');
        $articulo->categoria = $request->get('categoria');
        $articulo->save();

        $mensaje = Alert::success('Buen trabajo', '¡Articulo actualizado con exito!');

        return view('modulo-diagnosticos.articulos.edit', compact('articulo', 'mensaje'));


    }

    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();

        Alert::success('Buen trabajo', '¡Articulo eliminado con exito!');
        return redirect('articulos');
    }
}
