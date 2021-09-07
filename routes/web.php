<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesTransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

// This is for the category routes
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/show', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');

// This is for the product routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');

// This is for the sales routes
Route::get('/sales/transaction', [SalesTransactionController::class, 'transaction'])->name('sales.transaction');
Route::post('/sales/newtrans', [SalesTransactionController::class, 'newtrans'])->name('sales.newtrans');
Route::get('/sales/show', [SalesTransactionController::class, 'show'])->name('sales.show');
Route::get('/sales/showall', [SalesTransactionController::class, 'showall'])->name('sales.showall');
