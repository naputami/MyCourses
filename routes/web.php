<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students');
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers');
Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
Route::get('/newcourse', [App\Http\Controllers\FormAddCourseController::class, 'index'])->name('newcourse');
Route::delete('/courses/{id}', [App\Http\Controllers\CourseController::class, 'delete'])->name('course.delete');
Route::post('/api/fetch-teachers', [App\Http\Controllers\FormAddCourseController::class, 'fetchTeacher'])->name('fetchTeacher');
Route::get('/courses/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit');
Route::put('/courses/{id}', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update');
