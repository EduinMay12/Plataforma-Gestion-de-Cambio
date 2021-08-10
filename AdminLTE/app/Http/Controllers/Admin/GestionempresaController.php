<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModuloAdministrador\Empresa;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\User;
use App\Models\Estados;

class GestionempresaController extends Controller
{
    //Perimisos de vitas
    function __construct()
    {
         $this->middleware('permission:ver-gestion-empresa|crear-gestion-empresa|editar-gestion-empresa|eliminar-gestion-empresa', ['only' => ['index','store']]);
         $this->middleware('permission:crear-gestion-empresa', ['only' => ['create','store']]);
         $this->middleware('permission:editar-gestion-empresa', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-gestion-empresa', ['only' => ['destroy']]);
    }
    //Vista Index de empresa
    public function index()
    {
        return view('modulo-administrador.gestionempresa.index');
    }

}
