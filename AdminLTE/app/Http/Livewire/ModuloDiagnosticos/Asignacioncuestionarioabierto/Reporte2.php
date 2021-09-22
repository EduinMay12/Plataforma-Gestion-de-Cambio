<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionarioabierto;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Asignacioncuestionarioabierto;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte2 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.asignacioncuestionarioabierto.reporte2');
    }

    public function asigPreguntasAbiertasPDF(){

        $asignaciones = DB::table(DB::raw('asignacioncuestionarioabiertos a'))
        ->select('a.id','u.name','a.fecha_asignada','a.fecha_limite','c.nombre')
        ->join(DB::raw('users u'),'a.participante_id','=','u.id')
        ->join(DB::raw('cuestionario1s c'),'a.cuestionario_id','=','c.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.asignacioncuestionarioabierto.reporte2', compact('asignaciones'));
        return $pdf->stream('Asig-cue-abierto.pdf');
    }
}
