<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuloCapacitaciones\CategoriaController;
use App\Http\Controllers\ModuloCapacitaciones\CursoController;
use App\Http\Controllers\ModuloCapacitaciones\InstructoreController;

/*
|--------------------------------------------------------------------------
| Rutas vistas por el publico
|--------------------------------------------------------------------------
*/
	Route::get('/', function () { return view('welcome');});
	Auth::routes();
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
|--------------------------------------------------------------------------
| Modulo de Administrador
|--------------------------------------------------------------------------
*/
	Route::group(['middleware' => ['auth']], function() {
		Route::get('modulo-administrador/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->name('administrador');
		Route::resource('modulo-administrador/roles', App\Http\Controllers\Admin\RoleController::class);
		Route::resource('modulo-administrador/users', App\Http\Controllers\Admin\UserController::class);
		Route::resource('modulo-administrador/estados', App\Http\Controllers\Admin\EstadoController::class);
		Route::resource('modulo-administrador/gestionempleado', App\Http\Controllers\Admin\GestionempleadosController::class);
		Route::resource('modulo-administrador/gestionsucursal', App\Http\Controllers\Admin\GestionsucursalController::class);
		Route::resource('modulo-administrador/gestionempresa', App\Http\Controllers\Admin\GestionempresaController::class);
		Route::post('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@update_avatar']);
		Route::get('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@edit']);
		Route::put('perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\PerfilController@update']);
		Route::put('perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\PerfilController@password']);
	});

/*
|--------------------------------------------------------------------------
| Modulo de Capacitaciones
|--------------------------------------------------------------------------
*/
Route::resource('categorias', CategoriaController::class)->parameters(['categorias' => 'categoria']);
Route::resource('instructores', InstructoreController::class)->parameters(['instructores' => 'instructore']);
Route::resource('cursos', CursoController::class);

Route::get('/home', function() {
	return view('home');
})->name('home')->middleware('auth');