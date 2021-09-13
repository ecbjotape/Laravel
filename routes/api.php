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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuariosController::class, 'getUser']);
    Route::post('/create', [UsuariosController::class, 'create']);
    Route::post('/update', [UsuariosController::class, 'update']);
    Route::post('/delete', [UsuariosController::class, 'delete']);
    Route::get('/store', [UsuariosController::class, 'store']);
});
