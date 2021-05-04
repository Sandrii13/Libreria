<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\UserController;

Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class, 'details']);
    Route::resource('books', BookController::class);
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
