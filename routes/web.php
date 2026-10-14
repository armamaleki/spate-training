<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', fn() => view('login'))->name('login');
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', fn() => view('admin.index'))->name('index');
    Route::get('/users', fn() => view('admin.users'))->name('users');
    Route::get('/role', fn() => view('admin.role'))->name('role');
    Route::get('/article', fn() => view('admin.article'))->name('article');
});
