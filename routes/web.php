<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;

/* Route::get('/', function () {
    return view('welcome');
});  */

Route::controller(PageController::class)->group(function(){
    Route::get('/',                         'home')         ->name('home');
    Route::get('detail/{course:slug}',      'course')       ->name('course');
});

Route::resource('teachers', TeacherController::class)   ->middleware(['auth']);
Route::resource('schools',  SchoolController::class)    ->middleware(['auth']);
Route::resource('courses',  CourseController::class)    ->middleware(['auth']);

Route::redirect('dashboard', 'courses')->name('dashboard');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 */
require __DIR__.'/auth.php';
