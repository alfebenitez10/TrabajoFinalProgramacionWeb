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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('config_empresas', App\Http\Controllers\API\configEmpresaAPIController::class);

Route::resource('clientes', App\Http\Controllers\API\clientesAPIController::class);

Route::resource('entrenadores', App\Http\Controllers\API\entrenadoresAPIController::class);

Route::resource('maquinas', App\Http\Controllers\API\maquinasAPIController::class);

Route::resource('actividades', App\Http\Controllers\API\actividadesAPIController::class);

Route::resource('registros', App\Http\Controllers\API\registrosAPIController::class);

Route::resource('inscribirs', App\Http\Controllers\API\inscribirAPIController::class);

Route::resource('realizars', App\Http\Controllers\API\realizarAPIController::class);

Route::resource('pagos', App\Http\Controllers\API\pagosAPIController::class);