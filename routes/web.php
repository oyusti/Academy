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
    Route::get('/',                 'home')         ->name('home');
    Route::get('/{course:slug}',    'course')       ->name('course');
});

/* Route::get('/', function () {
    return view('home')->name('home');
}); */

Route::resource('teachers', TeacherController::class)   ->middleware(['auth']);
Route::resource('schools',  SchoolController::class)    ->middleware(['auth']);
Route::resource('courses',  CourseController::class)    ->middleware(['auth']);


Route::redirect('dashboard', 'courses')->name('dashboard');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

/* Route::get('auth.login', function () {
    return view('auth.login');
})->name('login'); */

require __DIR__.'/auth.php';
