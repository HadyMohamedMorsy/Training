<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Testing;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\AllUsers;
use App\Http\Controllers\showprofile;
use App\Http\Controllers\ProductController;
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




Auth::routes();

Route::get('/' , [Testing::class , 'index']);

Route::group(['middleware' => 'auth'] , function(){
    // Routes 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/invoice', InvoicesController::class);
    Route::resource('/sections' , SectionsController::class);
    Route::resource('/users' , AllUsers::class);
    Route::resource('/products' , ProductController::class);
    Route::get('getProducts/{id}', [ProductController::class, 'getIdSections']);

    // show theme files to get what i want
    Route::get('{show}' , [showprofile::class , 'index']);

});

