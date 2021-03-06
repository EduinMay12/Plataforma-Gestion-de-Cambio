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

use App\Http\Controllers\ModuloDiagnosticos\Cuestionario3Controller;
use App\Http\Controllers\ModuloDiagnosticos\Preguntas3Controller;
use App\Http\Controllers\ModuloDiagnosticos\Respuestas3Controller;

use App\Http\Controllers\ModuloDiagnosticos\AsignacionCuestionarioAbiertoController;
use App\Http\Controllers\ModuloDiagnosticos\AsignacionCuestionarioController;
use App\Http\Controllers\ModuloDiagnosticos\AsignacionCuestionario1Controller;

use App\Http\Livewire\ModuloCapacitaciones\Matriculaciones\Index;

//Reportes PDF
use App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico\Reporte;
use App\Http\Livewire\ModuloDiagnosticos\Puestos\Reporte1;
use App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionarioabierto\Reporte2;
use App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionarios\Reporte3;
use App\Http\Livewire\ModuloDiagnosticos\Asignacioncuestionario1s\Reporte4;
use App\Http\Livewire\ModuloDiagnosticos\Respuestas1\Reporte5;
use App\Http\Livewire\ModuloDiagnosticos\Respuestas2\Reporte6;
use App\Http\Livewire\ModuloDiagnosticos\Respuestas3\Reporte7;

/*Practica
use App\Http\Controllers\ModuloDiagnosticos\AlumnoController;
use App\Http\Controllers\ModuloDiagnosticos\ProfesorController;
use App\Http\Controllers\ModuloDiagnosticos\ArticuloController;*/

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
	Route::resource('modulo-administrador/roles', RoleController::class)->parameters(['role' => 'role']);
	Route::resource('modulo-administrador/users', UserController::class)->parameters(['users' => 'user']);
	Route::resource('modulo-administrador/gestionsucursal', GestionsucursalController::class)->parameters(['sucursal' => 'sucursal']);
	Route::resource('modulo-administrador/gestionempresa', GestionempresaController::class)->parameters(['empresas' => 'empresa']);
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
//Route::get('download-pdf', [GrupoController::class, 'downloadPDF'])->name('grupos.pdf');
Route::get('matriculaciones', [GrupoController::class, 'matriculaciones'])->name('grupos.matriculaciones');
Route::get('download-matriculaciones/{grupo}', [Index::class, 'livewirePDF'])->name('matriculaciones.pdf');
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
    Route::delete('competencia-puesto/{pro}/{puesto}', [
        PuestoController::class, 'borrar'
    ]);
    Route::resource('roldiagnosticos', RoleDiagnosticoController::class);
    Route::resource('asignaciondiagnosticos', AsignacionDiagnosticoController::class);
    
    Route::resource('cuestionario1s', Cuestionario1Controller::class);
    Route::resource('preguntas1s', Preguntas1Controller::class);
    Route::resource('respuestas1s', Respuestas1Controller::class);

    Route::resource('cuestionario2s', Cuestionario2Controller::class);
    Route::resource('preguntas2s', Preguntas2Controller::class);
    Route::resource('respuestas2s', Respuestas2Controller::class);

    Route::resource('cuestionario3s', Cuestionario3Controller::class);
    Route::resource('preguntas3s', Preguntas3Controller::class);
    Route::resource('respuestas3s', Respuestas3Controller::class);

    Route::resource('asignacioncuestionario-abierto', AsignacionCuestionarioAbiertoController::class);
    Route::resource('asignacioncuestionarios', AsignacionCuestionarioController::class);
    Route::resource('asignacioncuestionario1s', AsignacionCuestionario1Controller::class);

    //Reportes PDF
    Route::get('download-asignaciondiagnosticos', [Reporte::class, 'asignacionPDF'])->name('asignaciondiagnosticos.pdf');
    Route::get('download-puestos-competencias', [Reporte1::class, 'puestoCompetenciasPDF'])->name('puestos-competencias.pdf');

    Route::get('download-asig_preg-abiertas', [Reporte2::class, 'asigPreguntasAbiertasPDF'])->name('preguntas-abiertas.pdf');
    Route::get('download-asig_preg-booleanos', [Reporte3::class, 'asigPreguntasBooleanosPDF'])->name('preguntas-booleanos.pdf');
    Route::get('download-asig_preg-multiples', [Reporte4::class, 'asigPreguntasMultiplesPDF'])->name('preguntas-multiples.pdf');
    
    Route::get('download-resp_preg-abiertas', [Reporte5::class, 'respuestasAbiertasPDF'])->name('respuestas-abiertas.pdf');
    Route::get('download-resp_preg-booleanos', [Reporte6::class, 'respuestasbooleanosPDF'])->name('respuestas-booleanos.pdf');
    Route::get('download-resp_preg-multiples', [Reporte7::class, 'respuestasMultiplesPDF'])->name('respuestas-multiples.pdf');
    /*Práctica
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('profesores', ProfesorController::class);
    Route::resource('articulos', ArticuloController::class);*/

});