<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionempleadosController extends Controller
{
    public function index()
    {
        return view('gestionempleado.index');
    }
}
