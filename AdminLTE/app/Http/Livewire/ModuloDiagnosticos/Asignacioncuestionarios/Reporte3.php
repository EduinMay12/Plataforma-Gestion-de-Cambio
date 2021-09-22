<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionarios;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Asignacioncuestionarios;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class Reporte3 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.asignacioncuestionarios.reporte3');
    }

    public function asigPreguntasBooleanosPDF(){

        $asignaciones = DB::table(DB::raw('asignacioncuestionarios a'))
        ->select('a.id','u.name','a.fecha_asignada','a.fecha_limite','c.nombre')
        ->join(DB::raw('users u'),'a.participante_id','=','u.id')
        ->join(DB::raw('cuestionario2s c'),'a.cuestionario_id','=','c.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.asignacioncuestionarios.reporte3', compact('asignaciones'));
        return $pdf->stream('Asig-cue-booleanos.pdf');
    }
}
