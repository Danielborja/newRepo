<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('new-form', [RegisterController::class, 'create'])->name('new-form');
Route::get('index', [LoginController::class, 'create'])->name('login');
Route::post('iniciar', [LoginController::class, 'store'])->name('iniciar');
Route::post('new-buyer', [RegisterController::class, 'store'])->name('new-buyer');
Route::get('vistaComprar/{id}', [LoginController::class, 'vistaComprar'])->name('vistaComprar');
Route::get('vistaModificar/{id}', [ProductController::class, 'vistaModificar'])->name('vistaModificar');
Route::post('comprado/{id}', [ProductController::class, 'store'])->name('comprado');
Route::post('modificar/{id}', [ProductController::class, 'modificar'])->name('modificar');
Route::get('borrar/{id}', [ProductController::class, 'destroy'])->name('borrar');