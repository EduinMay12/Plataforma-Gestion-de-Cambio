<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrupoController extends Controller
{

    public function index()
    {
        return view('modulo-capacitaciones.grupos.index');
    }

}
