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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function () {
    return ['msg' => 'Welcome to FISHITS API'];
});

// Route::get('/fish', [FishController::class, 'index']);
// Route::post('/fish', [FishController::class, 'store']);

// route resource
Route::resource('fish', FishController::class)->only([
    'index', 'store'
]);
