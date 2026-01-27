<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




// Admin
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'ShowLoginForm'])->name('admin.login.form');


// Student
Route::get('/', [StudentController::class, 'showLoginStudent'])->name('student.login.form');
Route::post('/student/Login', [StudentController::class, 'Login'])->name('student.login');

// Middleware Student
Route::middleware('auth:student')->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
});
