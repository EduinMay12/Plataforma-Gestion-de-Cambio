<?php

namespace App\Http\Controllers\ModuloComunicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampañaController extends Controller
{
    public function index ()
    {
        return view('modulo-comunicaciones.campaña.index');
    }
}
