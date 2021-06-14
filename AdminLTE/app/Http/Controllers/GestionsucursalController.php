<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionsucursalController extends Controller
{
    public function index()
    {
        return view('gestionsucursal.index');
    }

    public function create()
    {
        return view('gestionsucursal.create');
    }
}
