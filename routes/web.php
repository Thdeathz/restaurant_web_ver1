<?php

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('landing');
//});

Route::get('/', function () {
    return view('layout.landing');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('process_login');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'processSignup'])->name('process_signup');
Route::group([
    'middleware' => CheckLoginMiddleware::class
], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'restaurants', 'as' => 'restaurants.'], function() {
        Route::get('/', [RestaurantController::class, 'index'])->name('index');
        Route::get('/create', [RestaurantController::class, 'create'])->name('create');
        Route::post('/create', [RestaurantController::class, 'store'])->name('store');
        Route::delete('/destroy/{restaurant}', [RestaurantController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{restaurant}', [RestaurantController::class, 'edit'])->name('edit');
        Route::put('/edit/{restaurant}', [RestaurantController::class, 'update'])->name('update');
        Route::get('/show/{restaurant}', [RestaurantController::class, 'show'])->name('show');
    });
});
