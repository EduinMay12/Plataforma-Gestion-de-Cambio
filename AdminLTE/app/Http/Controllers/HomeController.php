<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Estados;
use Spatie\Permission\Models\Role;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Permission;
use DB;
use App\Models\ModuloComunicacion\Elemento;
use App\Models\ModuloComunicacion\Comunicacion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function administrador()
    {
        $users_count = User::count();
        $empresa_count = Empresa::count();
        $sucursal_count = Sucursales::count();
        $estados_count = Estados::count();
<<<<<<< HEAD
        $elementos_count = Elemento::count();
        $comunicacions_count = Comunicacion::count();
        return view('modulo-administrador.administrador.administrador',compact('empresa_count', 'sucursal_count', 'estados_count', 'users_count', 'elementos_count', 'comunicacions_count'));
=======
        return view('administrador',compact('estados_count', 'users_count'));
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
    }

}
