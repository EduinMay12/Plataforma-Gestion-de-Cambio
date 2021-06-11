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
/*
|--------------------------------------------------------------------------
| Modulo de Administrador
|--------------------------------------------------------------------------
*/
Route::resource('gestionempleado', 'App\Http\Controllers\GestionempleadosController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('user', 'App\Http\Controllers\UserController');
Route::post('profile/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\ProfileController@update_avatar']);
Route::get('profile/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
Route::put('profile/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::put('profile/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
/*
|--------------------------------------------------------------------------
| Modulo de Comunicación
|--------------------------------------------------------------------------
*/

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
