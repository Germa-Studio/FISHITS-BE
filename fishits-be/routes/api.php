<?php

use App\Http\Controllers\Api\FishController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['msg' => 'Welcome to FISHITS API'];
});
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum', 'role:user']], function () {
    Route::put('/update', [App\Http\Controllers\Api\AuthController::class, 'update']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
});

// Create routes with role admin
Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function () {
    Route::get('/fish', [FishController::class, 'index']);
});


