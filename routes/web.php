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
    Route::get('usuarios', 'index');
    Route::get('usuarios/create', 'create');
    Route::get('usuarios/{usuario}', 'show');
});
