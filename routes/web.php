<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;
use App\Http\Controllers\controladorBD;
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

Route::get('/', [ControladorPaginas::class, 'flogin'])->name('Nlogin'); 
Route::post('/home', [ControladorPaginas::class, 'fhome'])->name('NHome'); 

Route::post('/entrada', function () {
    return view('entrada');
})->name('Centrada');

Route::post('/insertardatos', [controladorBD::class, 'store'])->name('CInsertado');