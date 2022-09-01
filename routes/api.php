<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TeacherController;
use App\Http\Controllers\Api\LoginController;



/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('v1/teachers', TeacherController::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);