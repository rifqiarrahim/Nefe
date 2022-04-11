<?php

use App\Http\Controllers\API\CafeController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('cafe', CafeController::class);
Route::post('/cafe/{id}', [CafeController::class, 'update']);
Route::resource('review', ReviewController::class);
Route::post('/review/{id}', [ReviewController::class, 'update']);
Route::resource('register', RegisterController::class);
Route::post('/register/{id}', [RegisterController::class, 'update']);
Route::resource('login', LoginController::class);
