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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cadastrar', [App\Http\Controllers\HospedeController::class, 'index'])->name('cadastrar');
Route::get('/reserva', [App\Http\Controllers\EstadiaController::class, 'index'])->name('estadia');
Route::get('/quarto', [App\Http\Controllers\QuartoController::class, 'index'])->name('quarto');

Route::get('/endereco', [App\Http\Controllers\EnderecoController::class, 'create'])->name('endereco');

Route::post('/endereco_inserir',[EnderecoController::class,'store'])->name('endereco_store');
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

