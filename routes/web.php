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
/* destroy padronização do laravel*/
Route::delete('/cars/{id}', [CarController::class,'destroy'])->middleware('auth');
Route::get('/cars/edit/{id}', [CarController::class,'edit'])->middleware('auth');
/* update */
Route::put('/cars/update/{id}', [CarController::class,'update'])->middleware('auth');

Route::get('/dashboard', [CarController::class,'dashboard'])->middleware('auth');
/* vincula usuário e carro na tabela car_user */
Route::post('/cars/join/{id}', [CarController::class, 'joincar'])->middleware('auth');

Route::delete('/cars/leave/{id}', [CarController::class, 'leavecar'])->middleware('auth');



