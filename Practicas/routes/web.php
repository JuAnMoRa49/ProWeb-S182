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

/*
Route::get('/', function () {
    return view('welcome');
});
*/



// Route::view('/', 'welcome')->name('apodoInicio');
// Route::view('/vista1', 'vista1')->name('apodoVista1');

// Route::get('/vista2', function () {
//     return view('vista2'); 
// })->name('apodoVista2');


// Route::get('/vista3', function () {
//     return view('vista3'); 
// })->name('apodoVista3');



Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodo1');
Route::get('/formulario', [diarioController::class, 'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdo'])->name('apodoRecuerdo');