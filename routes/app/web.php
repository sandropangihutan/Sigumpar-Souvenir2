<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Web\MessageController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\Web\NotificationController;



Route::group(['domain' => ''], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


    Route::prefix('')->name('web.')->group(function () {
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Profile
        Route::get('mainprofile',[ProfileController::class, 'index'])->name('mainprofile');
        Route::get('editprofile',[ProfileController::class, 'edit'])->name('editprofile');
        Route::patch('updateprofile/{id}',[ProfileController::class, 'update'])->name('updateprofile');

        //Message
        Route::get('messages',[MessageController::class, 'index'])->name('messages');

        // Menu
        Route::prefix('product')->name('product.')->group(function () {
            Route::get('stola', [ProductController::class, 'stola'])->name('stola');
            Route::get('sortali', [ProductController::class, 'sortali'])->name('sortali');
            Route::get('gantungankunci', [ProductController::class, 'gantungankunci'])->name('gantungankunci');
            Route::get('show/{product}', [ProductController::class, 'show'])->name('show');
        });

        //Message
        Route::resource('message', MessageController::class);


        // CART
        Route::get('counter_cart', [CartController::class, 'notif'])->name('counter_cart');
        Route::get('cart', [CartController::class, 'index'])->name('cart.index');
        Route::post('cart/add', [CartController::class, 'store'])->name('cart.add');
        Route::patch('cart/increase/{cart}', [CartController::class, 'increase'])->name('cart.increase');
        Route::patch('cart/decrease/{cart}', [CartController::class, 'decrease'])->name('cart.decrease');
        Route::patch('cart/update/{cart}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('cart/delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');
        

        // NOTIFICATION
        Route::get('counter', [NotificationController::class, 'counter'])->name('counter_notif');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification.index');
        
        // ORDER
        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');

    });
});
