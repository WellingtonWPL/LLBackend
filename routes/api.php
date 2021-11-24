<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterfaceController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('teste', function (Request $request) {
//     return response()->json(["TESTE"]);
// });

    //ROTAS PROTEGIDAS PELO SANCTUM
    // Route::group(['middleware' => ['auth:sanctum']], function () {
    //     Route::post('teste', [InterfaceController::class, 'verificaTeste']);
    //     Route::post('teste', [InterfaceController::class, 'verificaTeste']);
    //     Route::post('teste', [InterfaceController::class, 'verificaTeste']);
    // });

    Route::post('teste', [InterfaceController::class, 'verificaTeste']);
    Route::post('login', [InterfaceController::class, 'login']);
    Route::post('logout', [InterfaceController::class, 'logout']);
    Route::post('cadastrar', [InterfaceController::class, 'store']);
    Route::get('getMovies', [InterfaceController::class, 'getMovies']);
    Route::get('getSeries', [InterfaceController::class, 'getSeries']);
    Route::get('getDetalhes/{tipo}/{id}', [InterfaceController::class, 'show']);
    //Route::post('teste', 'InterfaceController@verificaTeste');
