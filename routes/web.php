<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/books/{id}', [\App\Http\Controllers\BookController::class, 'showBook'])->name('showBook');
Route::get('/category/{cat}', [\App\Http\Controllers\BookController::class, 'showCategory'])->name('showCategory');
Route::resource('profile', ProfileController::class);
Route::get('/book/{id}/{status}', [\App\Http\Controllers\BookController::class, 'changeStatus'])->name('changeStatus');

Auth::routes();
Route::middleware(['role:admin'])->group(function () {

    Route::get('/home', [HomeController::class, 'dashboard'])->name('home');
    Route::resource('book', BookController::class);
    Route::resource('category', CategoryController::class);




});
