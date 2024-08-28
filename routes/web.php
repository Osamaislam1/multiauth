<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});


Route::middleware(['auth', 'role:user', 'verified'])->prefix('user')->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');

});

Auth::routes();
