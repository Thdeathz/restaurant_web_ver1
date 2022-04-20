<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('landing');
//});

Route::get('/', function () {
    return view('landing');
});
Route::group(['prefix' => 'restaurants', 'as' => 'restaurants.'], function() {
    Route::get('/', [RestaurantController::class, 'index'])->name('index');
    Route::get('/create', [RestaurantController::class, 'create'])->name('create');
    Route::post('/create', [RestaurantController::class, 'store'])->name('store');
    Route::delete('/destroy/{restaurant}', [RestaurantController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{restaurant}', [RestaurantController::class, 'edit'])->name('edit');
    Route::put('/edit/{restaurant}', [RestaurantController::class, 'update'])->name('update');
    Route::get('/show/{restaurant}', [RestaurantController::class, 'show'])->name('show');
});
