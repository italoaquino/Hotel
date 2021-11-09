<?php

use App\Http\Controllers\HospedeController;
use Illuminate\Support\Facades\Route;





Route::auth();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inserir',[HospedeController::class,'create'])->name('hospede_inserir');
Route::post('/hospede_store',[HospedeController::class,'store'])->name('hospede_store');
Route::get('/reserva', [App\Http\Controllers\EstadiaController::class, 'index'])->name('estadia');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

Route::get('/quarto', [App\Http\Controllers\QuartoController::class, 'index'])->name('quarto');

Route::get('/endereco', [App\Http\Controllers\Endereco::class, 'create'])->name('endereco');

Route::post('/endereco_inserir',[Endereco::class,'store'])->name('endereco_store');

Route::get('/cadastroHospede', [App\Http\Controllers\HospedeController::class, 'index'])->name('hospede');

Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('contato');

Route::middleware('admin')->group(function(){

Route::get('/admin',[HomeController::class,'admin'])->name('admin');

});

Route::middleware('atendente')->group(function(){

Route::get('/atendente',[HomeController::class,'atendente'])->name('atendente');

});

Route::middleware('hospede')->group(function(){

Route::get('/hospede',[HomeController::class,'hospede'])->name('hospede');

});

