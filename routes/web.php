<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::controller(HomepageController::class)
    ->group(function () {
        Route::get('/', 'homepage')->name('homepage');
        Route::get('/category/{id}', 'category')->name('categorypage');
    });
