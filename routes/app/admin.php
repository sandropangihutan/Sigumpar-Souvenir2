<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['domain' => ''], function () {
   
    Route::prefix('admin/')->name('admin.')->group(function () { 
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');


            //Create Product
            Route::get('main',[ProductController::class, 'index'])->name('main');
            Route::get('create',[ProductController::class, 'create'])->name('create');
            Route::post('create',[ProductController::class, 'store'])->name('store');
            Route::get('show/{id}',[ProductController::class, 'show'])->name('show');
            Route::get('edit/{id}',[ProductController::class, 'edit'])->name('edit');
            Route::patch('update/{id}',[ProductController::class, 'update'])->name('update');
            Route::delete('destroy/{id}',[ProductController::class, 'destroy'])->name('destroy');

            //Message
            Route::get('messages',[MessageController::class, 'index'])->name('messages');


            //Profile
            Route::get('mainprofile',[ProfileController::class, 'index'])->name('mainprofile');
            Route::get('editprofile',[ProfileController::class, 'edit'])->name('editprofile');
            Route::patch('updateprofile/{id}',[ProfileController::class, 'update'])->name('updateprofile');

            //order
            Route::get('order', [OrderController::class, 'index'])->name('order.index');
            Route::get('order/pdf', [OrderController::class, 'pdf'])->name('order.pdf');
            Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
            Route::patch('order/accept/{order}', [OrderController::class, 'accept'])->name('order.accept');
            Route::patch('order/reject/{order}', [OrderController::class, 'reject'])->name('order.reject');

    });
});

