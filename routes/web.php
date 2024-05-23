<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/', LoginController::class);

Route::controller(UsuarioController::class)->group(function () {
    Route::get('usuarios', 'index')->name('index');
    Route::get('usuarios/create', 'create')->name('create');
    Route::post('usuarios/', 'store')->name('store');
    Route::get('usuarios/{usuario}', 'show')->name('usuario');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
