<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UpImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/role', [RoleController::class, 'index'])
    ->middleware(['auth'])
    ->name('role');

Route::get('/upload', [UpImageController::class, 'index'])
    ->middleware(['auth'])
    ->name('upload');

Route::post('/upfile', [UpImageController::class, 'store'])
    ->name('upfile');

require __DIR__.'/auth.php';
