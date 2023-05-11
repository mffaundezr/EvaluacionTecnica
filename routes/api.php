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

Route::get('Eventos','App\Http\Controllers\EventosController@GetEventos');
Route::get('Eventos/{Id}','App\Http\Controllers\EventosController@GetEventoId');
Route::post('Tickets','App\Http\Controllers\TicketsController@store');
Route::get('Tickets/{Id}','App\Http\Controllers\TicketsController@GetCompras');