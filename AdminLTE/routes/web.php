<?php

use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\ModuloCapacitaciones\PreguntaController;
use App\Http\Controllers\ModuloCapacitaciones\RecursoController;

use App\Http\Controllers\ModuloComunicacion\ComunicacionController;
use App\Http\Controllers\ModuloComunicacion\ElementoController;
use App\Http\Controllers\ModuloComunicacion\CampañaController;

use App\Http\Controllers\ModuloDiagnosticos\NivelController;
use App\Http\Controllers\ModuloDiagnosticos\CompetenciaController;
use App\Http\Controllers\ModuloDiagnosticos\PuestoController;
use App\Http\Controllers\ModuloDiagnosticos\RoleDiagnosticoController;
use App\Http\Controllers\ModuloDiagnosticos\AsignacionDiagnosticoController;

use App\Http\Controllers\ModuloDiagnosticos\Cuestionario1Controller;
use App\Http\Controllers\ModuloDiagnosticos\Preguntas1Controller;
use App\Http\Controllers\ModuloDiagnosticos\Respuestas1Controller;

use App\Http\Controllers\ModuloDiagnosticos\Cuestionario2Controller;
use App\Http\Controllers\ModuloDiagnosticos\Preguntas2Controller;
use App\Http\Controllers\ModuloDiagnosticos\Respuestas2Controller;

/*
|--------------------------------------------------------------------------
| Rutas vistas por el publico
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->name('administrador');
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
/*
|--------------------------------------------------------------------------
| Modulo de Administrador
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
	Route::group(['middleware' => ['auth']], function() {
	Route::get('modulo-administrador/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->name('administrador');
	Route::resource('modulo-administrador/roles', RoleController::class)->parameters(['role' => 'role']);
	Route::resource('modulo-administrador/users', UserController::class)->parameters(['users' => 'user']);
	Route::resource('modulo-administrador/gestionsucursal', GestionsucursalController::class)->parameters(['sucursal' => 'sucursal']);
	Route::resource('modulo-administrador/gestionempresa', GestionempresaController::class)->parameters(['empresas' => 'empresa']);
	Route::post('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@update_avatar']);
	Route::get('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@edit']);
	Route::put('perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\PerfilController@update']);
	Route::put('perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\PerfilController@password']);
=======
    Route::group(['middleware' => ['auth']], function() {
        Route::resource('gestionempleado', 'App\Http\Controllers\GestionempleadosController');
        Route::resource('gestionsucursal', 'App\Http\Controllers\GestionsucursalController');
        Route::resource('gestionempresa', 'App\Http\Controllers\GestionempresaController');
        Route::post('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@update_avatar']);
        Route::get('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@edit']);
        Route::put('perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\PerfilController@update']);
        Route::put('perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\PerfilController@password']);
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::resource('estados', App\Http\Controllers\EstadoController::class);
    });
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
/*
|--------------------------------------------------------------------------
| Modulo de Capacitaciones
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
Route::resource('categorias', CategoriaController::class)->parameters(['categorias' => 'categoria']);
Route::resource('instructores', InstructoreController::class)->parameters(['instructores' => 'instructore']);
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('grupos', [GrupoController::class, 'index'])->name('grupos.index');
Route::get('matriculaciones', [GrupoController::class, 'matriculaciones'])->name('grupos.matriculaciones');
Route::get('lecciones', [LeccioneController::class, 'index'])->name('lecciones.index');
Route::get('actividades', [LeccioneController::class, 'actividades'])->name('lecciones.actividades');
Route::get('recursos', [RecursoController::class, 'index'])->name('recursos.index');
Route::get('cuestionarios', [CuestionarioController::class, 'index'])->name('cuestionarios.index');
Route::get('preguntas', [PreguntaController::class, 'index'])->name('preguntas.index');    Route::get('preguntas', [PreguntaController::class, 'index'])->name('preguntas.index');
/*
|--------------------------------------------------------------------------
| Modulo de Comunicaciones
|--------------------------------------------------------------------------
*/
    Route::resource('comunicacion', ComunicacionController::class,)->parameters(['comunicacions' => 'comunicacion']);
    Route::resource('elemento', ElementoController::class,)->parameters(['elementos' => 'elemento']);
    Route::resource('campaña', CampañaController::class,)->parameters(['campañas' => 'campaña']);
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
    Route::resource('preguntas1s', Preguntas1Controller::class);
    Route::resource('respuestas1s', Respuestas1Controller::class);
    Route::resource('cuestionario2s', Cuestionario2Controller::class);
    Route::resource('preguntas2s', Preguntas2Controller::class);
    Route::resource('respuestas2s', Respuestas2Controller::class);


});
=======

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
