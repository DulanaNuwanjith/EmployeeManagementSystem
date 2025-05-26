<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('employee', function () {
    return view('employee');
});

Route::get('employeeProfile', function () {
    return view('employeeProfile');
});

Route::get('addEmployee', function () {
    return view('addEmployee');
});

Route::get('leave', function () {
    return view('leave');
});

Route::get('addLeave', function () {
    return view('addLeave');
});
