<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeccioneController extends Controller
{
    public function index()
    {
        return view('modulo-capacitaciones.lecciones.index');
    }

    public function actividades()
    {
        return view('modulo-capacitaciones.actividades.index');
    }

}
