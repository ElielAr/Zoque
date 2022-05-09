<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriasController;


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

Route::get('/Home',HomeController::class);

Route::get('/cursos/numeros', [CategoriasController::class,'index']);

Route::get('/cursos/cuerpo', [CategoriasController::class,'cuerpo']);

Route::get('/cursos/familia', [CategoriasController::class,'familiar']);

Route::get('/cursos/saludos', [CategoriasController::class,'saludos']);

Route::get('/cursos/alfabeto', [CategoriasController::class,'alfabeto']);

Route::get('/cursos/vocabulario', [CategoriasController::class,'vocabulario']);

Route::get('/cursos/verbos', [CategoriasController::class,'verbos']);

Route::get('/cursos/frutasverduras', [CategoriasController::class,'frutasverduras']);

Route::get('/cursos/animales', [CategoriasController::class,'animales']);

