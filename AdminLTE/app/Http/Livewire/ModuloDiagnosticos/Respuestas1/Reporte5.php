<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Respuestas1;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte5 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.respuestas1.reporte5');
    }

    public function respuestasAbiertasPDF(){
       
        $respuestas = DB::table(DB::raw('respuestas1s r'))
        ->select('r.id','r.textRespuesta','p.textPregunta','u.name')
        ->join(DB::raw('preguntas1s p'),'p.id','=','r.pregunta_id')
        ->join(DB::raw('users u'),'r.user_id','=','u.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.respuestas1.reporte5', compact('respuestas'));
        return $pdf->stream('Respuestas-preg_abiertas-evaluación.pdf');
    }
}
