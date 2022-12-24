<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore'])->name('store_process');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate_process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout_process');

Route::get('/relat', [PageController::class, 'relationship_test'])->name('relationship');
Route::get('/like/{id}', [LikeController::class, 'like'])->name('like_process');

// Route::resource('/feed', FeedController::class)->middleware('auth');

Route::resource('/feed', FeedController::class, [
    'names' => [
        'index' => 'home',
    ]
])->middleware('auth');
