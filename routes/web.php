<?php

use App\Http\Controllers\ProductContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [ProductContoller::class, 'index'])->name('products.index');

Route::get('/product/create', [ProductContoller::class, 'create'])->name('products.create');

Route::post('/product', [ProductContoller::class, 'store'])->name('products.store');

Route::get('/product/{product}/edit', [ProductContoller::class, 'edit'])->name('products.edit');

Route::put('/product/{product}/update', [ProductContoller::class, 'update'])->name('products.update');

Route::delete('/product/{product}/destroy', [ProductContoller::class, 'destroy'])->name('products.destroy');

