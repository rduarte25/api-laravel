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

Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');
Route::apiResource('v2/posts', App\Http\Controllers\Api\V2\PostController::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class, 'login'
]);
