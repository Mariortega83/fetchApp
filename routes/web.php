<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'main']);
Route::resource('product', ProductController::class)->except(['create', 'edit']);
Route::get('fetch', [ProductController::class, 'fetch'])->name('fetch');
