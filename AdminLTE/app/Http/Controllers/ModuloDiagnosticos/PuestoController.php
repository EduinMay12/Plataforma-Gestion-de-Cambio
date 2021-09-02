<?php

namespace App\Http\Controllers\ModuloDiagnosticos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\Competencia;
use App\Models\ModuloDiagnosticos\Nivel;

//use RealRashid\SweetAlert\Facades\Alert;

class PuestoController extends Controller
{

    public function index()
    {
        return view('modulo-diagnosticos.puestos.index');
    }

    public function create()
    {
        return view('modulo-diagnosticos.puestos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Puesto $puesto)
    {
        return view('modulo-diagnosticos.puestos.show', compact('puesto'));
    }

    public function edit(Puesto $puesto)
    {
        return view('modulo-diagnosticos.puestos.edit', compact('puesto'));
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    } 

    public function recuperar(Request $request, Puesto $puesto){
        $rules = [
            'competencia_id' => 'required',
            'nivel_id' => 'required'
        ];

        $messages = [
            'competencia_id.required' => 'La competencia es requerido.',
            'nivel_id.required' => 'El nivel es requerido.'
        ];

        $this->validate($request, $rules, $messages);

        $competencia_id = $request->competencia_id;
        $nivel_id = $request->nivel_id;
        $puesto_id = $request->puesto->id;

        $consulta = DB::table('competencia_puesto')
                        ->where('competencia_id', '=', $competencia_id)
                        ->where('puesto_id', '=', $puesto_id)->get();
        $contador = count($consulta);

        if($contador > 0){
            //return redirect()->route('puestos.edit', $puesto)->with('warning', '¡La competencia del puesto ya existe!');
            $mensaje = Alert::warning('Advertencia', 'La competencia que desea agregar, ¡Ya existe!');
            return redirect()->route('puestos.edit', compact('puesto', 'mensaje'));
        }else{
             //return redirect()->route('puestos.edit', $puesto)->with('success', '¡Competencia agregado con exito!');
            $mensaje1 = Alert::success('Buen trabajo', '¡Competencia agregado con exito!');
            $puesto->competencias()->attach($request->competencia_id, ['nivel_id' => $nivel_id]);
            return redirect()->route('puestos.edit', compact('puesto', 'mensaje1'));
        }

    }

    public function borrar(Request $request, $pro, Puesto $puesto){
         //return redirect()->route('puestos.edit', $puesto)->with('success', '¡Competencia eliminado con exito!');
        $mensaje2 = Alert::success('Buen trabajo', '¡Competencia eliminado con exito!');

        $puesto->competencias()->detach($pro, $puesto->id);

         return redirect()->route('puestos.edit', compact('puesto', 'mensaje2'));
    }
}
