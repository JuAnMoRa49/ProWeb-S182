<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [diarioController::class, 'metodoInicio'])->name('inicio');
Route::get('/registro', [diarioController::class, 'metodoRegistro'])->name('apodoRegistro');
Route::post('/guardarLibro', [diarioController::class, 'metodoGuardar'])->name('guardar');


