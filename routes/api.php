<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateUserController;
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

Route::post('/register', RegisterController::class);
Route::POST('/login', LoginController::class);

Route::middleware('auth:api')
    ->group(function(){
    Route::put('/user', UpdateUserController::class);
    Route::delete('/user', DeleteController::class);
    Route::post('/logout', LogoutController::class);
    });
