<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionempleadosController extends Controller
{
    public function index()
    {
        return view('modulo-administrador.gestionempleado.index');
    }

    public function create()
    {
        return view('modulo-administrador.gestionempleado.create');
    }
}
