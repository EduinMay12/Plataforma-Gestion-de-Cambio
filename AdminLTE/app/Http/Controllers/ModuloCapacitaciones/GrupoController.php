<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloCapacitaciones\Grupo;
use Barryvdh\DomPDF\Facade as PDF;

class GrupoController extends Controller
{

    public function index()
    {
        return view('modulo-capacitaciones.grupos.index');
    }

    public function matriculaciones()
    {
        return view('modulo-capacitaciones.matriculaciones.index');
    }

    public function downloadPDF()
    {
        $grupos = Grupo::all();
        $pdf = PDF::loadView('modulo-capacitaciones.grupos.pdf', compact('grupos'));
        return $pdf->download('grupos.pdf');
    }

}
