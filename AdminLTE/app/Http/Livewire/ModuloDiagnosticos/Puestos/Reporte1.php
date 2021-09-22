<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Puestos;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Competencia;
use App\Models\ModuloDiagnosticos\Puesto;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class Reporte1 extends Component
{
    public function render()
    {
        return view('livewire.modulo-diagnosticos.puestos.reporte1');
    }

    public function puestoCompetenciasPDF(){
        $puestos = Puesto::with('competencias')->where('estatus', '=', 1)->get();

        $pdf = PDF::loadView('livewire.modulo-diagnosticos.puestos.reporte1', compact('puestos'));
        return $pdf->stream('Puestos.pdf');
    }
}
