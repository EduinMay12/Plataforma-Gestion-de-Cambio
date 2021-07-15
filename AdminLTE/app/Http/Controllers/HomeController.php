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
        $this->middleware('permission:vista-administrador', ['only' => ['administrador']]);
        $this->middleware('permission:vista-home', ['only' => ['home']]);
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
        return view('modulo-administrador.administrador.administrador',compact('empresa_count', 'sucursal_count', 'estados_count', 'users_count'));
    }
}
