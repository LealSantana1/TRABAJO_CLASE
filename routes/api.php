<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\Inquilino_ServicioController;
use App\Http\Controllers\InquilinoAlquilerController;
use App\Http\Controllers\InquilinoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    Route::apiResource('usuarios', UsuarioController::class);
    
});
