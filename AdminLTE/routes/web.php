<?php

use Illuminate\Support\Facades\Route;

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
        Route::post('modulo-administrador/perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\Admin\PerfilController@update_avatar']);
        Route::get('modulo-administrador/perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\Admin\PerfilController@edit']);
        Route::put('modulo-administrador/perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\Admin\PerfilController@update']);
        Route::put('modulo-administrador/perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\Admin\PerfilController@password']);
    });
/*
|--------------------------------------------------------------------------
| Modulo de Comunicación
|--------------------------------------------------------------------------
*/
