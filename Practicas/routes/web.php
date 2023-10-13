<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;



Route::get('/', [diarioController::class,'metodoPrincipal'])->name('apodoPrincipal');

Route::get('/', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');

Route::get('/', [diarioController::class,'metodoRecuerdo'])->name('apodoRecuerdo');



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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


/*
Route::view('/', 'principal')->name('Inicio');
Route::view('/vista1', 'vista1')->name('apodoVista1');

Route::get('/vista2', function(){ 
    return view ('vista2');
});

Route::get('/vista3', function(){ 
    return view ('vista3');
});
*/