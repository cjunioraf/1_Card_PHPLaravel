<?php

use Illuminate\Support\Facades\Route;

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
/* Rota '/' chama a View(Tela) resource/views/welcome.blade.php */
use App\Http\Controllers\CarController;
/* Rota chama a classe index da controller CarController */
Route::get('/', [CarController::class,'index']);
/* Rota chama a classe create da controller CarController */
Route::get('/cars/create', [CarController::class,'create']);
Route::get('/cars/{id}', [CarController::class,'show']);
/* Rota chama a classe store da controller CarController */
Route::post('/cars', [CarController::class,'store']);


