<?php

namespace App\Http\Controllers\ModuloComunicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloComunicacion\Elemento;


class ElementoController extends Controller
{
    //Perimisos de vitas
    function __construct()
    {
         $this->middleware('permission:ver-elemento|crear-elemento|editar-elemento|eliminar-elemento', ['only' => ['index','store']]);
         $this->middleware('permission:crear-elemento', ['only' => ['create','store']]);
         $this->middleware('permission:editar-elemento', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-elemento', ['only' => ['destroy']]);
    }

    public function index ()
    {
        return view('modulo-comunicaciones.elemento.index');
    }
}
