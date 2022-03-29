<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\LoginController;
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

Route::post('/login', [LoginController::class, 'doLogin']);

Route::group(
    ['middleware' => ['auth:sanctum']],
    function () {
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::post('/logout', [LoginController::class, 'logout']);
    }
);
