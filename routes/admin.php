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
    Route::resource('questions',\App\Http\Controllers\Admin\QuestionController::class);
    Route::resource('comments',\App\Http\Controllers\Admin\CommentController::class);
    Route::resource('posts',\App\Http\Controllers\Admin\PostController::class);
    Route::resource('sliders',\App\Http\Controllers\Admin\SliderController::class);
    Route::put('toggle-product/{id}',[\App\Http\Controllers\Admin\ProductController::class,'toggleHide'])->name('products.hide');
    Route::put('toggle-comment/{id}',[\App\Http\Controllers\Admin\CommentController::class,'toggleHide'])->name('comments.hide');
    Route::put('toggle-post/{id}',[\App\Http\Controllers\Admin\PostController::class,'toggleHide'])->name('posts.hide');
    Route::put('toggle-slider/{id}',[\App\Http\Controllers\Admin\SliderController::class,'toggleHide'])->name('sliders.hide');
    Route::post('file-upload',\App\Http\Controllers\Admin\FileController::class);
});
