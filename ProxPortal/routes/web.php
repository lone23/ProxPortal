<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;
use App\Services\ProxmoxService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/test-proxmox', function () {
    try {
        $proxmox = (new ProxmoxService())->connect();

        // Test: ottieni lista nodi
        $nodes = $proxmox->getNodes()->list()->getResponse()->data;

        return dd($nodes);

    } catch (\Exception $e) {
        return "Errore di connessione: " . $e->getMessage();
    }
});



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register.perform');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->type === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');
});
