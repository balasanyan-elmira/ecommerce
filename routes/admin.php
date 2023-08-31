<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for admin.
*/


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
