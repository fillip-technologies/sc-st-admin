<?php

use App\Http\Controllers\Manegement\UserAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;




Route::get('/', function () {
    return view('home');
});

Route::post('/chat', [ChatController::class, 'handle']);
