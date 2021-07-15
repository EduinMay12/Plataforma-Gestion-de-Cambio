<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;


class GestionsucursalController extends Controller
{
    // Vista de roles
    function __construct()
    {
         $this->middleware('permission:ver-gestion-sucursal|crear-gestion-sucursal|editar-gestion-sucursal|eliminar-gestion-sucursal', ['only' => ['index','store']]);
         $this->middleware('permission:crear-gestion-sucursal', ['only' => ['create','store']]);
         $this->middleware('permission:editar-gestion-sucursal', ['only' => ['edit','update']]);
         $this->middleware('permission:eliminar-gestion-sucursal', ['only' => ['destroy']]);
    }
    // Vista de la tabla de sucursales
    public function index()
    {
        return view('modulo-administrador.gestionsucursal.index');
    }
}

