<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ViewController;

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


Route::get('home', [ViewController::class, 'showData'])->name('home');
Route::get('view/{id}', [ViewController::class, 'productView'])->name('viewProduct');


Route::middleware(['auth', 'isAdmin'])->group(function() {
    // Route::get('/admin',function(){
    //     return view('layouts.admin');
    // })->name('admin');


    Route::resource('admin', ProductController::class);

    Route::get('edit-product/{id}', [ProductController::class, 'edit']);

    Route::post('update-product/{id}', [ProductController::class, 'update']);

    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

});
