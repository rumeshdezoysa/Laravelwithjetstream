<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\BrandsController;
use \App\Http\Controllers\SizeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/template', function () {
    //return view('template');
});


Route::get('/template', function () {
    return view('layouts.master');
});


Route::middleware(['auth:sanctum'])->group(function () {
    // Category
    Route::resource('categories', CategoryController::class);
    //brands
    Route::resource('brands', BrandsController::class);

    //sizes
    Route::resource('sizes', SizeController::class);
});
