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
/* Rota chama a classe create da controller CarController - middleware ação entre o clicar no create e abrir o formulário, usado para validar o Usuário.*/
/* middleware('auth') - só permite acessar para usuários logados, caso não esteja redireviona para a tela de login */
Route::get('/cars/create', [CarController::class,'create'])->middleware('auth');
Route::get('/cars/{id}', [CarController::class,'show']);
/* Rota chama a classe store da controller CarController */
Route::post('/cars', [CarController::class,'store']);
Route::get('/dashboard', [CarController::class,'dashboard'])->middleware('auth');

