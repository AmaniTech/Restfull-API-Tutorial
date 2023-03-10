<?php

use App\Http\Controllers\API\MahasiswaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
Route::get('mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);
Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
Route::post('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
