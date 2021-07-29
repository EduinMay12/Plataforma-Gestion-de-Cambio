<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
=======
use App\Models\User;
use App\Models\Estados;
use Spatie\Permission\Models\Role;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Permission;
use DB;
use App\Models\ModuloComunicacion\Elemento;
use App\Models\ModuloComunicacion\Comunicacion;
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
=======

    public function administrador()
    {
        $users_count = User::count();
        $empresa_count = Empresa::count();
        $sucursal_count = Sucursales::count();
        $estados_count = Estados::count();
        $elementos_count = Elemento::count();
        $comunicacions_count = Comunicacion::count();
        return view('modulo-administrador.administrador.administrador',compact('empresa_count', 'sucursal_count', 'estados_count', 'users_count', 'elementos_count', 'comunicacions_count'));
    }
>>>>>>> Stashed changes
}
