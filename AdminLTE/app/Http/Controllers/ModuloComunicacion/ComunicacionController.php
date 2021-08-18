<?php

namespace App\Http\Controllers\ModuloComunicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloComunicacion\Comunicacion;

class ComunicacionController extends Controller
{
    public function index ()
    {
        //Perimisos de vitas
        function __construct()
        {
            $this->middleware('permission:ver-comunicacion|crear-comunicacion|editar-comunicacion|eliminar-comunicacion', ['only' => ['index','store']]);
            $this->middleware('permission:crear-comunicacion', ['only' => ['create','store']]);
            $this->middleware('permission:editar-comunicacion', ['only' => ['edit','update']]);
            $this->middleware('permission:eliminar-comunicacion', ['only' => ['destroy']]);
        }

        return view('modulo-comunicaciones.comunicacion.index');
    }
}
