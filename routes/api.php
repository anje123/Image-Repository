<?php

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


Route::middleware('auth:api')->post('/image/add', [App\Http\Controllers\API\ImageController::class, 'store']);
Route::post('register', [App\Http\Controllers\Auth\UserController::class, 'register']);
Route::post('login', [App\Http\Controllers\Auth\UserController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\UserController::class, 'logout']);
Route::post('refresh', [App\Http\Controllers\Auth\UserController::class, 'refresh']);
Route::post('me', [App\Http\Controllers\Auth\UserController::class, 'me']);
Route::get('/images', [App\Http\Controllers\API\ImageController::class, 'getImages']);


