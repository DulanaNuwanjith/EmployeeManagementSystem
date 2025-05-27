<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!session()->has('logged_in')) {
        return redirect('login');
    }
    return view('dashboard');
});

// Public routes
Route::get('login', [LoginController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout'); // ← keep this outside middleware

Route::view('employee', 'employee')->name('employee');
Route::view('leave', 'leave')->name('leave');
Route::view('employeeProfile', 'employeeProfile')->name('employeeProfile');
Route::view('addEmployee', 'addEmployee')->name('addEmployee');
Route::view('addLeave', 'addLeave')->name('addLeave');
Route::view('addUsers', 'addUsers')->name('addUsers');


// Route::middleware(['authCheck'])->group(function () {

// });
