<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PageController;
use App\Models\Feed;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore'])->name('store_process');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate_process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout_process');

Route::get('/relat', [PageController::class, 'relationship_test'])->name('relationship');
Route::get('/my_profile', [PageController::class, 'my_profile'])->name('my-profile');
Route::get('/notifications', [PageController::class, 'notifications'])->name('notifications');
Route::get('/', [PageController::class, 'auto_redirect'])->name('home');


Route::get('/like/{id}', [LikeController::class, 'like'])->name('like_process');

// Route::resource('/feed', FeedController::class)->middleware('auth');

Route::resource('/feed', FeedController::class, [
    'names' => [
        'index' => 'home',
        'store' => 'upload_post',
        'show' => 'show_post',
    ]
])->middleware('auth');

Route::resource('/comment', CommentController::class);
