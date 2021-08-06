<?php

namespace App\Http\Controllers\ModuloComunicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampañaController extends Controller
{
    public function index ()
    {
        //Perimisos de vitas
        function __construct()
        {
            $this->middleware('permission:ver-campaña|crear-campaña|editar-campaña|eliminar-campaña', ['only' => ['index','store']]);
            $this->middleware('permission:crear-campaña', ['only' => ['create','store']]);
            $this->middleware('permission:editar-campaña', ['only' => ['edit','update']]);
            $this->middleware('permission:eliminar-campaña', ['only' => ['destroy']]);
        }

        return view('modulo-comunicaciones.campaña.index');
    }
}
