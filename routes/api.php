<?php

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
//Route::get('/juegos', "App\Http\Controllers\juegoController@index");
Route::get('/juegos', [juegoController::class,'index']);
Route::post('/juegos', "App\Http\Controllers\juegoController@store");
Route::put('/juegos/{id}', "App\Http\Controllers\juegoController@update");
Route::delete('/juegos/{id}', "App\Http\Controllers\juegoController@destroy");
