<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'login_admin'])->name('admin');
Route::post('login', [LoginController::class, 'login'])->name('admin.login');
Route::get('admin/store', [LoginController::class, 'store'])->name('login.store');

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('user/list', [UserController::class, 'index'])->name('admin.index');
    Route::get('/create/form', [UserController::class, 'createForm'])->name('admin.create.user');
    Route::post('/save/user', [UserController::class, 'store'])->name('admin.user.save');

    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::post('password/update', [LoginController::class, 'update'])->name('password.updated');
    Route::get('update/password', [LoginController::class, 'update_password'])->name('update.password');
    Route::get('/users', function () {
        return 'This is the admin users list';
    })->name('users');
    Route::get('/settings', function () {
        return 'Admin settings page';
    })->name('settings');
});
