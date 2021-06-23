<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estados;
use Illuminate\Http\Request;
use DB;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estados = $request->get('buscarpor');

        $estados = estados::where('d_mnpio','like',"%$estados%")->paginate(10000);
        return view('modulo-administrador.estados.index',compact('estados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulo-administrador.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'd_codigo' => 'required',
            'd_asenta' => 'required',
            'd_tipo_asenta' => 'required',
            'd_mnpio' => 'required',
            'd_estado' => 'required',
            'd_ciudad' => 'required',
            'd_cp' => 'required',
            'c_estado' => 'required',
            'c_oficina' => 'required',
            'c_cp' => 'required',
            'c_tipo_asenta' => 'required',
            'c_mnpio' => 'required',
            'id_asenta_cpcons' => 'required',
            'd_zona' => 'required',
            'c_cve_ciudad' => 'required',
        ]);

        Estados::create($request->all());

        return redirect()->route('estados.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show(Estados $estados)
    {
        return view('estados.show',compact('estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit(Estados $estados)
    {
        return view('estados.edit',compact('estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estados  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estados $estados)
    {
         request()->validate([
            'd_codigo' => 'required',
            'd_asenta' => 'required',
            'd_tipo_asenta' => 'required',
            'd_mnpio' => 'required',
            'd_estado' => 'required',
            'd_ciudad' => 'required',
            'd_cp' => 'required',
            'c_estado' => 'required',
            'c_oficina' => 'required',
            'c_cp' => 'required',
            'c_tipo_asenta' => 'required',
            'c_mnpio' => 'required',
            'id_asenta_cpcons' => 'required',
            'd_zona' => 'required',
            'c_cve_ciudad' => 'required',
        ]);

        $estados->update($request->all());

        return redirect()->route('estados.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estados $estados)
    {
        $estados->delete();

        return redirect()->route('estados.index')
                        ->with('success','Product deleted successfully');
    }
}
