<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FishController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\ShipTypeController;
use App\Http\Controllers\Api\UserFishController;
use App\Http\Controllers\Api\RegionPicController;
use App\Http\Controllers\Api\PendaratanController;
use App\Http\Controllers\Api\FishLocationController;

Route::get('/', function () {
    return ['msg' => 'Welcome to FISHITS API'];
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/relogin', [AuthController::class, 'relogin']);
    Route::put('/update', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/{id}', [LocationController::class, 'show']);
    Route::post('/locations', [LocationController::class, 'store']);
    Route::put('/locations/{id}', [LocationController::class, 'update']);
    Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

    Route::get('/fish', [FishController::class, 'index']);
    Route::get('/fish/{id}', [FishController::class, 'show']);
    Route::post('/fish', [FishController::class, 'store']);
    Route::put('/fish/{id}', [FishController::class, 'update']);
    Route::delete('/fish/{id}', [FishController::class, 'destroy']);

    Route::get('/users/fish', [UserFishController::class, 'getAllFish']);
    Route::get('/users/fish/{date}', [UserFishController::class, 'getAllFishByDate']);

    Route::get('/pendaratans', [PendaratanController::class, 'index']);
    Route::get('/pendaratans/{id}', [PendaratanController::class, 'show']);

    Route::group(['middleware' => 'role:admin'], function () {

        Route::get('/locations/fish/{id}', [LocationController::class, 'showFishByLocation']);

        // Route::get('fish/{fish}/locations', [FishLocationController::class, 'index']);
        // Route::post('fish/{fish}/locations', [FishLocationController::class, 'store']);
        // Route::delete('fish/{fish}/locations', [FishLocationController::class, 'destroy']);

        Route::get('/regionpics', [RegionPicController::class, 'index']);
        Route::post('/regionpics', [RegionPicController::class, 'store']);
    });

    Route::group(['middleware' => 'role:user'], function () {
        Route::get('/ship-types', [ShipTypeController::class, 'index']);
        Route::get('/ship-types/{id}', [ShipTypeController::class, 'show']);
        Route::post('/ship-types', [ShipTypeController::class, 'store']);
        Route::put('/ship-types/{id}', [ShipTypeController::class, 'update']);
        Route::delete('/ship-types/{id}', [ShipTypeController::class, 'destroy']);

        Route::get('/users/{user}/fish', [UserFishController::class, 'getFish']);
        Route::get('/users/{user}/fish/{date}', [UserFishController::class, 'getFishByDate']);
        Route::post('/users/{user}/fish', [UserFishController::class, 'attachFish']);
        Route::delete('/users/{user}/fish/{fish}', [UserFishController::class, 'detachFish']);
    });
});

