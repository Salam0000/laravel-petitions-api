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

Route::get('/test', function () {
    return response()->json([
        'message' => 'Laravel API is working!'
    ]);
});

// Route::get('/petitions',[App\Http\Controllers\PetitionController::class, 'index']);
// Route::post('/petitions', [App\Http\Controllers\PetitionController::class, 'store']);

// Route::resource('petitions', App\Http\Controllers\PetitionController::class)->only([
//     'index', 'store'
// ]);

Route::apiResource('petitions', App\Http\Controllers\PetitionController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
