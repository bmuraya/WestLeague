<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatergoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');



Route::middleware('auth')->group(function () {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/team', [UserController::class, 'Team'])->name('user.team');
});

Route::middleware('auth', AuthAdmin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('categories', CatergoriesController::class);
    Route::resource('posts', PostController::class);
    Route::get('trashed-posts', [PostController::class, 'trashed'])->name('trashed-posts.index');
    

   
    
});