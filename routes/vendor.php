<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes vendor.
|
*/

Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
