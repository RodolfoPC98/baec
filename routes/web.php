<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\BienesInmuebleController;
use App\Http\Controllers\MiniSplitController;
use Illuminate\Http\Request;

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

// Route::get('/', LoginController::class);

// Route::controller(UsuarioController::class)->group(function () {
//     Route::get('usuarios', 'index')->name('index');
//     Route::get('usuarios/create', 'create')->name('create');
//     Route::post('usuarios/', 'store')->name('store');
//     Route::get('usuarios/{usuario}', 'show')->name('usuario');
// });

// Route::middleware('auth:sanctum')->get('/user', function (Reque $request){
//     return $request->user();
// });

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});


Route::get('/', InicioSesionController::class);

Route::controller(InicioController::class)->group(function () {
    Route::get('inicio', 'inicio')->name('inicio');
});

Route::controller(UsuarioController::class)->group(function () {
    Route::get('usuarios', 'index')->name('usuarios');
    Route::get('usuarios/create', 'create')->name('crear_usuario');
    Route::get('usuarios/{usuario}', 'show')->name('mostrar_usuario');
});

Route::controller(ReporteController::class)->group(function () {
    Route::get('reportes/bienes', 'bien')->name('reporte_bienes');
    Route::get('reportes/mantenimientos', 'mantenimiento')->name('reporte_mantenimientos');
});

Route::controller(BienesInmuebleController::class)->group(function () {
    Route::get('bienes_inmuebles/bienes_inmuebles', 'bienes_inmueble')->name('bienes_inmuebles');
    Route::post('bienes_inmuebles/create', 'create')->name('crear_bien_inmueble');
    Route::post('bienes_inmuebles/delete', 'delete')->name('eliminar_bien_inmueble');
});

Route::controller(MiniSplitController::class)->group(function () {
    Route::get('minisplit/ver_mantenimientos', 'ver_mantenimientos')->name('ver_mantenimientos');
    Route::get('minisplit/mantenimiento', 'mantenimiento')->name('mantenimiento');
    Route::get('minisplit/actualizar_mantenimiento', 'actualizar_mantenimiento')->name('actualizar_mantenimiento');
    Route::get('minisplit/ver_piezas', 'ver_piezas')->name('ver_piezas');
});

Route::controller(BienController::class)->group(function () {

    Route::post('bienes/agregar_bienes', 'agregar_bienes')->name('agregar_bienes');
    Route::get('bienes/ver_bienes', 'ver_bienes')->name('ver_bienes');
    Route::post('bienes/delete_bienes', 'eliminar_bienes')->name('eliminar_bienes');
    Route::get('bienes/export_bienes', 'export_bienes')->name('export_bienes');
    
    Route::post('bienes/agregar_bienes_computadoras', 'agregar_bienes_computadoras')->name('agregar_bienes_computadoras');
    Route::get('bienes/ver_bienes_computadoras', 'ver_bienes_computadoras')->name('ver_bienes_computadoras');
    Route::post('bienes/delete_bienes_computadoras', 'eliminar_bienes_computadoras')->name('eliminar_bienes_computadoras');

    Route::post('bienes/agregar_tipo_bien', 'agregar_tipo_bien')->name('agregar_tipo_bien');
    Route::get('bienes/ver_tipo_bienes', 'ver_tipo_bienes')->name('ver_tipo_bienes');
    Route::post('bienes/delete_tipo_bien', 'delete_tipo_bien')->name('eliminar_tipo_bien');

    Route::post('bienes/agregar_descripcion_bien', 'agregar_descripcion_bien')->name('agregar_descripcion_bien');
    Route::get('bienes/ver_descripcion_bien/{id}', 'ver_descripcion_bien')->name('ver_descripcion_bien');
    Route::get('bienes/ver_descripcion_bienes', 'ver_descripcion_bienes')->name('ver_descripcion_bienes');
    Route::post('bienes/delete_descripcion_bien', 'eliminar_descripcion_bien')->name('eliminar_descripcion_bien');

    Route::post('bienes/agregar_modelos_y_marcas', 'agregar_modelos_y_marcas')->name('agregar_modelos_y_marcas');
    Route::get('bienes/ver_modelos_y_marcas', 'ver_modelos_y_marcas')->name('ver_modelos_y_marcas');
    Route::post('bienes/delete_modelos_y_marcas', 'eliminar_modelos_y_marcas')->name('eliminar_modelos_y_marcas');
    
    Route::post('bienes/agregar_ubicaciones', 'agregar_ubicaciones')->name('agregar_ubicaciones');
    Route::get('bienes/ver_ubicaciones', 'ver_ubicaciones')->name('ver_ubicaciones');
    Route::post('bienes/delete_ubicaciones', 'eliminar_ubicaciones')->name('eliminar_ubicaciones');
    
    Route::post('bienes/agregar_responsables', 'agregar_responsables')->name('agregar_responsables');
    Route::get('bienes/ver_responsables', 'ver_responsables')->name('ver_responsables');
    Route::post('bienes/delete_responsables', 'eliminar_responsables')->name('eliminar_responsables');
    
    Route::post('bienes/agregar_proveedores', 'agregar_proveedores')->name('agregar_proveedores');
    Route::get('bienes/ver_proveedores', 'ver_proveedores')->name('ver_proveedores');
    Route::post('bienes/delete_proveedores', 'eliminar_proveedores')->name('eliminar_proveedores');
    
    Route::post('bienes/agregar_estados', 'agregar_estados')->name('agregar_estados');
    Route::get('bienes/ver_estados', 'ver_estados')->name('ver_estados');
    Route::post('bienes/delete_estados', 'eliminar_estados')->name('eliminar_estados');
    
});