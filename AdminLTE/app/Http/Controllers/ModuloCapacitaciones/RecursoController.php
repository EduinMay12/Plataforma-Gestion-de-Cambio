<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index()
    {
        return view('modulo-capacitaciones.recursos.index');
    }

}
