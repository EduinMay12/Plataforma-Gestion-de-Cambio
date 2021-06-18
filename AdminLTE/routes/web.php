<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->name('administrador');
/*
|--------------------------------------------------------------------------
| Modulo de Administrador
|--------------------------------------------------------------------------
*/
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
/*
|--------------------------------------------------------------------------
| Modulo de Comunicación
|--------------------------------------------------------------------------
*/

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
