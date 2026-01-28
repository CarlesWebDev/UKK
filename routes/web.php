<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController, StudentController};

Route::get('/auth-redirect', function () {
    $intendedUrl = session()->get('url.intended');

    // Cek jika URL mengandung 'admin', lempar ke route admin
    if ($intendedUrl && str_contains($intendedUrl, '/admin')) {
        return redirect()->route('admin.login.form');
    }
    // Default ke siswa
    return redirect()->route('student.login.form');
})->name('login');



// Admin
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'ShowLoginForm'])->name('admin.login.index');
Route::get('/admin/Login',[App\Http\Controllers\AdminController::class, 'ShowLoginForm'])->name('admin.login.form');
Route::post('/Login', [App\Http\Controllers\AdminController::class, 'Login'])->name('admin.login');


// Student
Route::get('Login',[App\Http\Controllers\StudentController::class, 'Login'])->name('student.login.process');
// Route::get('/', [StudentController::class, 'showLoginStudent'])->name('student.login.form');
Route::get('/', [StudentController::class, 'showLoginStudent'])->name('student.login.form');
Route::post('/student/Login', [StudentController::class, 'Login'])->name('student.login');
Route::get('/History', [StudentController::class, 'History'])->name('student.history');




// Middleware Student
Route::middleware('auth:student')->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
});

// Middleware Admin
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
});














// use App\Http\Controllers\StudentController;
// use Illuminate\Support\Facades\Route;




// // Admin
// Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'ShowLoginForm'])->name('login');
// Route::get('/admin/Login',[App\Http\Controllers\AdminController::class, 'ShowLoginForm'])->name('admin.login.form');
// Route::post('/Login', [App\Http\Controllers\AdminController::class, 'Login'])->name('admin.login');


// // Student
// Route::get('Login',[App\Http\Controllers\StudentController::class, 'Login'])->name('login');
// // Route::get('/', [StudentController::class, 'showLoginStudent'])->name('student.login.form');
// Route::get('/', [StudentController::class, 'showLoginStudent'])->name('login');
// Route::post('/student/Login', [StudentController::class, 'Login'])->name('student.login');
// Route::get('/History', [StudentController::class, 'History'])->name('student.history');

// // Middleware Student
// Route::middleware('auth:student')->prefix('student')->name('student.')->group(function () {
//     Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
// });

// // Middleware Admin
// Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
// });

