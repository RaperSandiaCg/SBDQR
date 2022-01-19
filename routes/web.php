<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadeController;

use Carbon\Carbon;
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

Route::get('/terminar', function () {
    return view('finalizar');
});

Route::get('/vista1', function () {
    return view('actividadterminada');
});

Route::get('/vista2', function () {
    return view('verRegistro');
});



// Route::get('{area_id}/{equipo_id}', [ActividadeController::class, 'index']);
// Route::post('actividade/create', [ActividadeController::class, 'create']);

Route::resource('actividades', App\Http\Controllers\ActividadeController::class);
Route::resource('areas', App\Http\Controllers\AreaController::class);
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('equipos', App\Http\Controllers\EquipoController::class);
Route::resource('puntosbloqueos', App\Http\Controllers\PuntosBloqueoController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('/dashboard');
