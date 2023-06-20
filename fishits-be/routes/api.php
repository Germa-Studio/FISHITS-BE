<?php

use App\Http\Controllers\Api\FishController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\FishLocationController;
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
    Route::get('/fish/{id}', [FishController::class, 'show']);
    Route::post('/fish', [FishController::class, 'store']);
    Route::put('/fish/{id}', [FishController::class, 'update']);
    Route::delete('/fish/{id}', [FishController::class, 'destroy']);

    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/{id}', [LocationController::class, 'show']);
    Route::post('/locations', [LocationController::class, 'store']);
    Route::put('/locations/{id}', [LocationController::class, 'update']);
    Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

    Route::get('/locations/fish/{id}', [LocationController::class, 'showFishByLocation']);
});

Route::get('fish/{fish}/locations', [FishLocationController::class, 'index']);
Route::post('fish/{fish}/locations', [FishLocationController::class, 'store']);
Route::delete('fish/{fish}/locations', [FishLocationController::class, 'destroy']);
