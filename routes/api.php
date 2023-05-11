<?php

use App\Http\Controllers\PendudukController;
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

Route::get('/penduduk',[PendudukController::class, 'index']);
Route::post('/penduduk/create',[PendudukController::class, 'store']);
Route::get('/penduduk/{id}',[PendudukController::class, 'show']); 
Route::post('/penduduk/{id}/update',[PendudukController::class, 'update']); 
Route::post('/penduduk/{id}/delete',[PendudukController::class, 'delete']); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
