<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionempresaController extends Controller
{
    public function index()
    {
        return view('modulo-administrador.gestionempresa.index');
    }

    public function create()
    {
        return view('modulo-administrador.gestionempresa.create');
    }
}
