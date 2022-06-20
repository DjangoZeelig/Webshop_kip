<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'showLandingPage']);
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminProductController::class, 'index']);

Route::get('products/index-paging', [\App\Http\Controllers\ProductController::class, 'indexPaging']);
Route::get('products/index-sorting', [\App\Http\Controllers\ProductController::class, 'indexSorting']);
Route::get('products/index-filtering', [\App\Http\Controllers\ProductController::class, 'indexFiltering']);


Route::get('store', [\App\Http\Controllers\StoreController::class, 'index']);
Route::post('/store/add-to-cart', [\App\Http\Controllers\StoreController::class, 'addToCart']);
Route::get('cart', [\App\Http\Controllers\CartController::class, 'index']);

