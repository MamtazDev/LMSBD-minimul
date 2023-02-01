<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\{
    CourseController,
    ProfileController,
    StudentController
};
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// profile route
Route::get('/profile', [ProfileController::class, 'profile_index'])->name('profile.index');
Route::post('/profile/image', [ProfileController::class, 'update_image'])->name('profile.image.update');
Route::post('/profile/password/change', [ProfileController::class, 'profile_password_change'])->name('profile.password.change');
Route::post('/profile/edit', [ProfileController::class, 'edit_profile'])->name('profile.edit');


//Course Route
Route::resource('courses', CourseController::class);
Route::get('courses/delete/{id}', [CourseController::class, 'destroy'])->name('courses.delete');


//Student Route
Route::resource('student', StudentController::class);
Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
