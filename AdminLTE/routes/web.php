<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GestionempresaController;
use App\Http\Controllers\Admin\GestionsucursalController;

use App\Http\Controllers\ModuloCapacitaciones\CategoriaController;
use App\Http\Controllers\ModuloCapacitaciones\CuestionarioController;
use App\Http\Controllers\ModuloCapacitaciones\CursoController;
use App\Http\Controllers\ModuloCapacitaciones\GrupoController;
use App\Http\Controllers\ModuloCapacitaciones\InstructoreController;
use App\Http\Controllers\ModuloCapacitaciones\LeccioneController;

use App\Http\Controllers\ModuloComunicacion\ComunicacionController;
use App\Http\Controllers\ModuloComunicacion\ElementoController;
use App\Http\Controllers\ModuloComunicacion\CampañaController;

use App\Http\Controllers\ModuloDiagnosticos\NivelController;
use App\Http\Controllers\ModuloDiagnosticos\CompetenciaController;
use App\Http\Controllers\ModuloDiagnosticos\PuestoController;
use App\Http\Controllers\ModuloDiagnosticos\RoleDiagnosticoController;
use App\Http\Controllers\ModuloDiagnosticos\AsignacionDiagnosticoController;
use App\Http\Controllers\ModuloDiagnosticos\Cuestionario1Controller;
use App\Http\Controllers\ModuloDiagnosticos\PreguntasabiertaController;

/*
|--------------------------------------------------------------------------
| Rutas vistas por el publico
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Modulo de Administrador
|--------------------------------------------------------------------------
*/

	Route::group(['middleware' => ['auth']], function() {

	Route::get('modulo-administrador/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->name('administrador');
	Route::resource('modulo-administrador/roles', App\Http\Controllers\Admin\RoleController::class)->parameters(['role' => 'role']);
	Route::resource('modulo-administrador/users', App\Http\Controllers\Admin\UserController::class)->parameters(['user' => 'user']);
	Route::resource('modulo-administrador/gestionsucursal', App\Http\Controllers\Admin\GestionsucursalController::class)->parameters(['gestionsucursal' => 'sucursal']);
	Route::resource('modulo-administrador/gestionempresa', App\Http\Controllers\Admin\GestionempresaController::class)->parameters(['gestionempresa' => 'empresa']);
	Route::post('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@update_avatar']);
	Route::get('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@edit']);
	Route::put('perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\PerfilController@update']);
	Route::put('perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\PerfilController@password']);

/*
|--------------------------------------------------------------------------
| Modulo de Capacitaciones
|--------------------------------------------------------------------------
*/

    Route::resource('categorias', CategoriaController::class)->parameters(['categorias' => 'categoria']);
    Route::resource('instructores', InstructoreController::class)->parameters(['instructores' => 'instructore']);
    Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('grupos', [GrupoController::class, 'index'])->name('grupos.index');
    Route::get('lecciones', [LeccioneController::class, 'index'])->name('lecciones.index');
    Route::get('cuestionarios', [CuestionarioController::class, 'index'])->name('cuestionarios.index');
/*
|--------------------------------------------------------------------------
| Modulo de Comunicaciones
|--------------------------------------------------------------------------
*/
    Route::resource('comunicacion', App\Http\Controllers\ModuloComunicacion\ComunicacionController::class,)->parameters(['comunicacion' => 'comunicacion']);
    Route::resource('elemento', App\Http\Controllers\ModuloComunicacion\ElementoController::class,)->parameters(['elemento' => 'elemento']);
    Route::resource('campaña', App\Http\Controllers\ModuloComunicacion\CampañaController::class,)->parameters(['campaña' => 'campaña']);
/*
|--------------------------------------------------------------------------
| Modulo de Diagnostico
|--------------------------------------------------------------------------
*/
    Route::resource('niveles', NivelController::class);
    Route::resource('competencias', CompetenciaController::class)->parameters(['competencias' => 'competencia']);
    Route::resource('puestos', PuestoController::class);
    Route::post('competencia-puesto/{puesto}', [PuestoController::class, 'recuperar'])->name('competencia-puesto.recuperar');
    Route::delete('competencia-puesto/{puesto}', [PuestoController::class, 'borrar'])->name('competencia-puesto.borrar');
    Route::resource('roldiagnosticos', RoleDiagnosticoController::class);
    Route::resource('asignaciondiagnosticos', AsignacionDiagnosticoController::class);
    Route::resource('cuestionario1s', Cuestionario1Controller::class);


    });
