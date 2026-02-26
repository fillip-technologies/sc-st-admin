<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'login_admin'])->name('admin');
Route::post('login', [LoginController::class, 'login'])->name('admin.login');
Route::get('admin/store', [LoginController::class, 'store'])->name('login.store');

Route::prefix('super-admin')->middleware(['super_admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('super-admin.dashboard');
    Route::get('user/list',[UserController::class, 'index'])->name('index');
    Route::get('/create/form',[UserController::class, 'createForm'])->name('create.user');
    Route::post('save/user',[UserController::class, 'store'])->name('save.user');
      
    Route::get('/school', [RandomController::class, 'school'])->name('school');
    Route::get('/teacher', [RandomController::class, 'teacher'])->name('teacher');
    Route::get('/attendence', [RandomController::class, 'attendance'])->name('attendance');
    Route::get('/hotel', [RandomController::class, 'hotels'])->name('hotel');
    Route::get('/fee_managements', [RandomController::class, 'fee_managements'])->name('fee_managements');
    Route::get('/parents', [RandomController::class, 'parents'])->name('parents');
    Route::get('/library', [RandomController::class, 'library'])->name('library');
    Route::get('/notice', [RandomController::class, 'notice'])->name('notice');
    Route::get('/student',[RandomController::class, 'student'])->name('student');

    Route::get('/logout', [LoginController::class, 'logout'])->name('super_admin.logout');
    Route::post('password/update', [LoginController::class, 'update'])->name('super_admin.password.updated');
    Route::get('update/password', [LoginController::class, 'update_password'])->name('super_admin.update.password');
    Route::get('/users', function () {
        return 'This is the admin users list';
    })->name('super_adminusers');
    Route::get('/settings', function () {
        return 'Admin settings page';
    })->name('super_admin.settings');
});
