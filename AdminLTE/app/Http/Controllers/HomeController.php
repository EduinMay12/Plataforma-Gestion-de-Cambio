<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estados;
use Spatie\Permission\Models\Role;
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
        $estados_count = Estados::count();
        return view('administrador',compact('estados_count', 'users_count'));
    }
}
