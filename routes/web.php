<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('/product-management', 'product-management')
    ->name('product-management');
