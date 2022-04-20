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

Route::get('/restaurants', [RestaurantController::class, 'restaurants.index'])->name('index');
Route::get('/restaurants/create', [RestaurantController::class, 'restaurants.create'])->name('create');
Route::post('/restaurants/create', [RestaurantController::class, 'restaurants.store'])->name('store');
Route::delete('/restaurants/destroy/{restaurant}', [RestaurantController::class, 'restaurants.destroy'])->name('destroy');
Route::get('/restaurants/edit/{restaurant}', [RestaurantController::class, 'restaurants.edit'])->name('edit');
Route::put('/restaurants/edit/{restaurant}', [RestaurantController::class, 'restaurants.update'])->name('update');
