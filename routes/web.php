<?php

use Illuminate\Support\Facades\Route;

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
       return view('auth/login');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::get('/Admin', 'App\Http\Controllers\AdminController@index');

Route::get('/TablasHomologacion', 'App\Http\Controllers\TablasHomologacionController@index');
Route::get('/Analisis', 'App\Http\Controllers\AnalisisController@index');
Route::get('/BasedeDatos', 'App\Http\Controllers\BasedeDatosController@index');
Route::get('/Usuarios', 'App\Http\Controllers\UsuariosController@index');
