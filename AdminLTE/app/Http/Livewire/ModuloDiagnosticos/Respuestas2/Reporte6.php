<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Respuestas2;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte6 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.respuestas2.reporte6');
    }

    public function respuestasBooleanosPDF(){
       
        $respuestas = DB::table(DB::raw('respuestas2s r'))
        ->select('r.id','r.textRespuesta','p.textPregunta','u.name')
        ->join(DB::raw('preguntas2s p'),'p.id','=','r.pregunta_id')
        ->join(DB::raw('users u'),'r.user_id','=','u.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.respuestas2.reporte6', compact('respuestas'));
        return $pdf->stream('Respuestas-preg_booleanos-evaluación.pdf');
    }
}
