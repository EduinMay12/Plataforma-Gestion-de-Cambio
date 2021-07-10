<?php

namespace App\Http\Controllers\ModuloCapacitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloCapacitaciones\Curso;
class CursoController extends Controller
{

    public function index()
    {
        return view('modulo-capacitaciones.cursos.index');
    }


}
