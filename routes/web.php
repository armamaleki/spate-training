<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\ArticleController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', fn() => view('admin.index'))->name('index');
    Route::get('/users', fn() => view('admin.users'))->name('users');
    Route::get('/role', fn() => view('admin.role'))->name('role');


    Route::prefix('/')->name('article.')->middleware('auth')->group(function(){
        Route::get('/article', [ArticleController::class, 'index'])->name('index');
        Route::get('/article/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/article', [ArticleController::class, 'store'])->name('store');
        Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('edit');
        Route::put('/article/{article}', [ArticleController::class, 'update'])->name('update');
        Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('destroy');
    });


});
