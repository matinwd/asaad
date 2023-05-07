<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "auth" middleware group. Make something great!
|
*/
Route::middleware(['auth','role.basic:admin|developer'])->group(function (){
    Route::get('/',[DashboardController::class,'main'])->name('dashboard');
    Route::get('/profile',[\App\Http\Controllers\Admin\ProfileController::class,'show'])->name('profile');
    Route::post('/profile',[\App\Http\Controllers\Admin\ProfileController::class,'update']);
    Route::resource('users',\App\Http\Controllers\Admin\UserController::class);
    Route::resource('products',\App\Http\Controllers\Admin\ProductController::class);
    Route::resource('categories',\App\Http\Controllers\Admin\CategoryController::class);
});
