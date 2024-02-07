<?php

use App\Http\Controllers\DrainaseController;
use App\Http\Controllers\JalanController;
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

Route::get('drainase', [DrainaseController::class, 'index']);
Route::post('drainase', [DrainaseController::class, 'store']);
Route::get('drainase/{id}', [DrainaseController::class, 'show']);
Route::put('drainase/{id}', [DrainaseController::class, 'update']);
Route::delete('drainase/{id}', [DrainaseController::class, 'destroy']);

Route::get('jalan', [JalanController::class, 'index']);
Route::post('jalan', [JalanController::class, 'store']);
Route::get('jalan/{id}', [JalanController::class, 'show']);
Route::put('jalan/{id}', [JalanController::class, 'update']);
Route::delete('jalan/{id}', [JalanController::class, 'destroy']);
