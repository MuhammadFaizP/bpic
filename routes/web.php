<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BinaanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardSuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/profil', [PublicController::class, 'profil'])->name('profil');
Route::get('/struktur', [PublicController::class, 'struktur'])->name('struktur');
Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');
Route::get('/masjid', [BinaanController::class, 'index'])->name('binaan.index');
Route::get('/masjid/{id}', [BinaanController::class, 'show'])->name('binaan.show');
Route::get('/galeri', [GaleriController::class, 'index'])->name('public.galeri');

// Authentication routes (Laravel Breeze/Fortify/etc)
require __DIR__.'/auth.php';

// Protected routes (need authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard routes based on role
    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('superadmin')) {
            return redirect()->route('superadmin.dashboard');
        } elseif (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }
        
        return redirect('/');
    })->name('dashboard');

    // Super Admin routes
    Route::middleware(['role:superadmin'])->prefix('superadmin')->name('superadmin.')->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardSuperAdminController::class, 'index'])->name('dashboard');
        
        // User management (CRUD) - with superadmin prefix
        Route::resource('users', UserController::class)->names([
            'index' => 'users.index',
            'create' => 'users.create', 
            'store' => 'users.store',
            'show' => 'users.show',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destroy'
        ]);
        
        // Masjid management (CRUD) - with superadmin prefix
        Route::resource('masjid', MasjidController::class)->names([
            'index' => 'masjid.index',
            'create' => 'masjid.create',
            'store' => 'masjid.store', 
            'show' => 'masjid.show',
            'edit' => 'masjid.edit',
            'update' => 'masjid.update',
            'destroy' => 'masjid.destroy'
        ]);
    });

    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])
            ->name('admin.dashboard');
        
        // Laporan management (CRUD)
        Route::resource('laporan', LaporanController::class);
    });
});