<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TeacherController;
use App\Http\Controllers\Api\V1\SchoolController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\LoginController;



/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('v1/teachers', TeacherController::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/schools', SchoolController::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/courses', CourseController::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);