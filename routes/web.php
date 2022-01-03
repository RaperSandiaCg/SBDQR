<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

//Auth::routes();

//Route::get('/calendario', [App\Http\Controllers\HomeController::class, 'index'])->name('calendar');
Route::get('/calendario', [FrontController::class, 'calendario'])->name('calendario');
Route::get('/procedimientos', [FrontController::class, 'procedimientos'])->name('procecimientos.index');
Route::get('/layout', [FrontController::class, 'layout'])->name('layout.bhp');
