<?php

use App\Http\Controllers\HospedeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//auth
Route::auth();




//Views padrao
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reserva', [App\Http\Controllers\EstadiaController::class, 'index'])->name('estadia');
Route::get('/detalhe', [App\Http\Controllers\DetalheController::class, 'index'])->name('detalhe');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('contato');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/quarto', [App\Http\Controllers\QuartoController::class, 'index'])->name('quarto');
Route::get('/endereco', [App\Http\Controllers\Endereco::class, 'create'])->name('endereco');

//hospede
Route::get('/inserir',[HospedeController::class,'create'])->name('hospede_inserir');
Route::post('/cadastroInserir',[HospedeController::class,'store'])->name('endereco_store');

//middle
Route::middleware('admin')->group(function(){
Route::get('/admin',[HomeController::class,'admin'])->name('admin');
});

Route::middleware('atendente')->group(function(){
Route::get('/atendente',[HomeController::class,'atendente'])->name('atendente');
});

Route::middleware('hospede')->group(function(){
Route::get('/hospede',[HomeController::class,'hospede'])->name('hospede');
});

