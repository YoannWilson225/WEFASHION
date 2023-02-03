<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// use App\Http\Controllers\ProductController;

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

Auth::routes();

// Route::get('home', function () {
//     return view('home');
// });


Route::resource('home', CategoryController::class);


Route::middleware(['auth', 'isAdmin'])->group(function() {
    // Route::get('/admin',function(){
    //     return view('layouts.admin');
    // })->name('admin');

    Route::resource('admin', ProductController::class);
});
