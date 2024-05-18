<?php

use App\Http\Controllers\API\Eventos\EventoController;
use App\Http\Controllers\API\Filtros\FiltroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/delete-evento/{evento}', [EventoController::class, 'delete']);
Route::post('/create-evento', [EventoController::class, 'store']);

Route::get('/filtros', [FiltroController::class, 'index']);
