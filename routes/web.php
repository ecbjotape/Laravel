<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuariosController::class, 'getUser'])->name('home');
    Route::get('/novo', [UsuariosController::class, 'create']);
    Route::post('/novo', [UsuariosController::class, 'store'])->name('registrar');
    Route::get('/alterar/{id}', [UsuariosController::class, 'edit']);
    Route::post('/alterar/{id}', [UsuariosController::class, 'update'])->name('alterar');
    Route::get('/excluir/{id}', [UsuariosController::class, 'delete']);
    Route::post('/excluir/{id}', [UsuariosController::class, 'delete'])->name('excluir');
});
