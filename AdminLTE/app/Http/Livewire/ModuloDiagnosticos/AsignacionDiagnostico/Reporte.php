<?php

namespace App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte extends Component
{
    
    public function render()
    {
        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.reporte');
    }

    public function asignacionPDF(){
      $asignaciones = DB::table(DB::raw('asignacion_diagnosticos a_d'))
      ->select('a_d.id','u.name','a_d.puesto_actual','a_d.puesto_futuro','a_d.evaluador','a_d.rol_diagnostico','a_d.reporta_a')
      ->join(DB::raw('users u'),'a_d.user_id','=','u.id')
      ->get();

      $pdf = PDF::loadView('livewire.modulo-diagnosticos.asignacion-diagnostico.reporte', compact('asignaciones'));
      return $pdf->stream('Asignaciones-Diagnosticos.pdf');
    }
}
