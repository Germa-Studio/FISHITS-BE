<?php

use App\Http\Controllers\Api\FishController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return ['msg' => 'Welcome to FISHITS API'];
});

//API route for register new user
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    // route resource

    Route::get('/profile', function () {
        return auth()->user();
    });

    Route::resource('fish', FishController::class)->only([
        'index', 'store'
    ]);

    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


