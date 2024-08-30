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

Route::apiResource('newtests', App\Http\Controllers\Api\NewTestController::class);
Route::apiResource('newtestcruds', App\Http\Controllers\Api\NewTestCrudController::class);
Route::apiResource('hellocurds', App\Http\Controllers\Api\HelloCurdController::class);
