<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for admin.
*/


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* Profile routes */

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
