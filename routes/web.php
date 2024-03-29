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

Route::post('/', [ControladorPaginas::class, 'flogin'])->name('Nlogin'); 
Route::get('/', [ControladorPaginas::class, 'flogin2'])->name('Nlogin'); 

Route::post('/home', [ControladorPaginas::class, 'fhome'])->name('NHome'); 
Route::get('/home', [ControladorPaginas::class, 'fhome2'])->name('NHome'); 


Route::get('/entrada', [ControladorPaginas::class, 'fentrada'])->name('Nentrada');
Route::post('/entrada', [controladorBD::class, 'store'])->name('Nentrada');


Route::get('/salida', [ControladorPaginas::class, 'fsalida'])->name('Nsalida');

Route::get('/admin', [ControladorPaginas::class, 'fadmin'])->name('Nadmin');

Route::get('/productos', [ControladorPaginas::class, 'fproductos'])->name('Nproductos');

Route::get('/tareas', [ControladorPaginas::class, 'ftareas'])->name('Ntareas');

Route::get('/inventario', [ControladorPaginas::class, 'finventario'])->name('Ninventario');


