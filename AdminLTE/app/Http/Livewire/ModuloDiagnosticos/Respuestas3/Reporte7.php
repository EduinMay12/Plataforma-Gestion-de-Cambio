<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Respuestas3;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte7 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.respuestas3.reporte7');
    }

    public function respuestasMultiplesPDF(){
       
        $respuestas = DB::table(DB::raw('respuestas3s r'))
        ->select('r.id','r.textRespuesta','p.textPregunta','u.name')
        ->join(DB::raw('preguntas3s p'),'p.id','=','r.pregunta_id')
        ->join(DB::raw('users u'),'r.user_id','=','u.id')
        ->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.respuestas3.reporte7', compact('respuestas'));
        return $pdf->stream('Respuestas-preg_múltiples-evaluación.pdf');
    }
}
