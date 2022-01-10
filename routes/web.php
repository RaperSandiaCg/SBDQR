<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vista', function () {
    return view('list-registro');
});

Route::get('/termianar', function () {
    return view('finalizar');
});

Route::resource('actividades', App\Http\Controllers\ActividadeController::class);
Route::resource('areas', App\Http\Controllers\AreaController::class);
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('equipos', App\Http\Controllers\EquipoController::class);
Route::resource('puntosbloqueo', App\Http\Controllers\PuntosBloqueoController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

