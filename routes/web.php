<?php

use App\Http\Controllers\ProdController;
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

Route::get('/', [ProdController::class, 'index'])->name('product.index');

Route::get('/products', [ProdController::class, 'show'])->name('products.show');

Route::get('/new', [ProdController::class, 'add'])->name('product.add');

Route::get('/product/store', [ProdController::class, 'store'])->name('product.store');
Route::post('/product/store', [ProdController::class, 'store'])->name('product.store');

Route::delete('product/delete/{id}', [ProdController::class, 'destroy'])->name('product.destroy');
Route::get('product/delete/{id}', [ProdController::class, 'destroy'])->name('product.destroy');

Route::get('/product/edit/{id}', [ProdController::class, 'edit'])->name('products.edit'); 
Route::post('/product/edit/{id}', [ProdController::class, 'edit'])->name('products.edit');

Route::get('product/update/{id}', [ProdController::class, 'update'])->name('product.update');
Route::put('product/update/{id}', [ProdController::class, 'update'])->name('product.update');
