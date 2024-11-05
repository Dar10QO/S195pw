<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistas;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome')->name('welcome');
// Route::view('/formulario', 'formulario')->name('formulario');
// Route::view('/clientes', 'clientes')->name('clientes');
// Route::view('/componentes', 'componentes')->name('componentes');

Route::get('/', [vistas::class, 'home'])->name('welcome');
Route::get('/formulario', [vistas::class, 'formulario'])->name('formulario');
Route::get('/clientes', [vistas::class, 'clientes'])->name('clientes');
Route::post('/storeClient', [vistas::class, 'procesarClientes'])->name('procesarClientes');

