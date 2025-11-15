<?php

use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post("login",[UserController::class,'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('products', [ApiProductController::class, 'index']);
    Route::post('products', [ApiProductController::class, 'store']);
});

