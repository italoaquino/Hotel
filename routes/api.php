<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('hospedes', \App\Http\Controllers\api\HospedesController::class);
Route::apiResource('usuarios', \App\Http\Controllers\api\UsersController::class);
