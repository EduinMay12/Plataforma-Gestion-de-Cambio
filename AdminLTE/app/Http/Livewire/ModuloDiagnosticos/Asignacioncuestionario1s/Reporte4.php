<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Asignacioncuestionario1;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte4 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.asignacioncuestionario1s.reporte4');
    }

    public function asigPreguntasMultiplesPDF(){

        $asignaciones = DB::table(DB::raw('asignacioncuestionario1s a'))
        ->select('a.id','u.name','a.fecha_asignada','a.fecha_limite','c.nombre')
        ->join(DB::raw('users u'),'a.participante_id','=','u.id')
        ->join(DB::raw('cuestionario3s c'),'a.cuestionario_id','=','c.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.asignacioncuestionario1s.reporte4', compact('asignaciones'));
        return $pdf->stream('Asig-cue-multiples.pdf');
    }
}
