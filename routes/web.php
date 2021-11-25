<?php

use App\Http\Controllers\ContatoHospedeController;
use App\Http\Controllers\DetalheController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\HospedeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ReservaController;

//auth
Route::auth();

//Views padrao
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'index'])->name('sobre');
Route::get('/reserva', [App\Http\Controllers\EstadiaController::class, 'index'])->name('estadia');
Route::get('/detalhe', [App\Http\Controllers\DetalheController::class, 'index'])->name('detalhe');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('contato');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/quarto', [App\Http\Controllers\QuartoController::class, 'index'])->name('quarto');

//reserva_inserir
Route::get('/reservar',[DetalheController::class, 'create'])->name('reservar_inserir');
Route::post('/enviar_reserva',[DetalheController::class,'store'])->name('reservar_store');

//reservas
Route::get('/reservas',[ReservaController::class, 'index'])->name('reservas');


//informacao - endereco
Route::get('/inserirEndereco',[EnderecoController::class, 'create'])->name('endereco_inserir');
Route::post('/enderecoInserir',[EnderecoController::class,'store'])->name('endereco_cadastro_store');

//informacao - contato
Route::get('/inserirContato',[ContatoHospedeController::class, 'create'])->name('contato_inserir');
Route::post('/contatoInserir',[ContatoHospedeController::class,'store'])->name('contato_cadastro_store');

//hospede
Route::get('/inserir',[HospedeController::class,'create'])->name('hospede_inserir');
Route::post('/cadastroInserir',[HospedeController::class,'store'])->name('cadastro_store');

//hospede-update
Route::get('/updateHospede',[PerfilController::class ,'edit'])->name('hospede_update');
Route::post('/hospedeUpdate',[PerfilController::class, 'store'])->name('update_hospede');



//middle
Route::middleware('admin')->group(function(){
Route::get('/admin',[HomeController::class,'admin'])->name('admin');
});

Route::middleware('atendente')->group(function(){
Route::get('/atendente',[HomeController::class,'all'])->name('atendente');
Route::get('/hospede/{id}',[HomeController::class,'show'])->name('atendente2');
Route::get('/hospedeDelete/{id}',[HomeController::class,'destroy'])->name('atendente3');

});

Route::middleware('hospede')->group(function(){
Route::get('/hospede',[HomeController::class,'hospede'])->name('hospede');
});

