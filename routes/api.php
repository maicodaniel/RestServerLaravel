<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Clientes;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/clientes',[App\Http\Controllers\Api\ClientesController::class,'index']);
Route::post('/clientes/criar',[App\Http\Controllers\Api\ClientesController::class,'store']);
Route::middleware('auth.basic')->get('/cliente/{id}',[App\Http\Controllers\Api\ClientesController::class,'show']);


