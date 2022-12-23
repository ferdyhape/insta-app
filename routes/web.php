<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore'])->name('store_process');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate_process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout_process');

Route::get('/relat', [PageController::class, 'relationship_test'])->name('relationship');
