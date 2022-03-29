<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\CategoryController;
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

Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
