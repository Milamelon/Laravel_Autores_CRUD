<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

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


Route::get('/autores/index', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores/store', [AutorController::class, 'store'])->name('autores.store');
Route::put('/autores/{codigo_autor}', [AutorController::class, 'update'])->name('autores.update');
Route::delete('/autores/{autor}',[AutorController::class, 'destroy'])->name('autores.destroy');
