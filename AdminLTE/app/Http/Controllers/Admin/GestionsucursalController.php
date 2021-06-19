<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionsucursalController extends Controller
{
    public function index()
    {
        return view('modulo-administrador.gestionsucursal.index');
    }

    public function create()
    {
        return view('modulo-administrador.gestionsucursal.create');
    }
}
