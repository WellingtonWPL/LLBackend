<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\AuthController;

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



    //ROTAS PROTEGIDAS PELO SANCTUM
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::get('getMovies', [InterfaceController::class, 'getMovies']);
        Route::get('getSeries', [InterfaceController::class, 'getSeries']);
        Route::get('getDetalhes/{tipo}/{id}', [InterfaceController::class, 'show']);
        Route::get('search/{busca?}', [InterfaceController::class, 'search']);
        Route::post('logout', [AuthController::class, 'logout']);
    });

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    

