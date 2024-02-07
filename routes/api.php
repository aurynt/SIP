<?php

use App\Http\Controllers\DrainaseController;
use App\Http\Controllers\JalanController;
use App\Http\Controllers\AsetJalanProjectController;
use App\Http\Controllers\PeraturanController;
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

Route::get('aset-jalan-project', [AsetJalanProjectController::class, 'index']);
Route::post('aset-jalan-project', [AsetJalanProjectController::class, 'store']);
Route::get('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'show']);
Route::put('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'update']);
Route::delete('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'destroy']);

Route::get('aset-jalan-project', [AsetJalanProjectController::class, 'index']);
Route::post('aset-jalan-project', [AsetJalanProjectController::class, 'store']);
Route::get('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'show']);
Route::put('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'update']);
Route::delete('aset-jalan-project/{id}', [AsetJalanProjectController::class, 'destroy']);

Route::get('peraturan', [PeraturanController::class, 'index']);
Route::post('peraturan', [PeraturanController::class, 'store']);
Route::get('peraturan/{id}', [PeraturanController::class, 'show']);
Route::put('peraturan/{id}', [PeraturanController::class, 'update']);
Route::delete('peraturan/{id}', [PeraturanController::class, 'destroy']);
