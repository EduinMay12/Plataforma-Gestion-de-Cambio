<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionempresaController extends Controller
{
    public function index()
    {
        return view('gestionempresa.index');
    }

    public function create()
    {
        return view('gestionempresa.create');
    }
}
