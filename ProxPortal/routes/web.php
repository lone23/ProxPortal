<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('login.perform');


Route::get('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return "Redirect…";
})->middleware('rolecheck');

Route::get('/admin/dashboard',
    [AdminDashboardController::class, 'index']
)->name('admin.dashboard')->middleware('auth');

Route::get('/user/dashboard',
    [UserDashboardController::class, 'index']
)->name('user.dashboard')->middleware('auth');
