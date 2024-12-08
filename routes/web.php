<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/articles/{slug}',[ArticleController::class,'show'])->name('articles.show');




Route::get('/about',[HomeController::class,'about']);
Route::get('/categories',[CategorieController::class,'index']);
Route::get('/articles',[ArticleController::class,'index']);
Route::get('/articles/add',[ArticleController::class,'create']);
Route::post('/articles/store',[ArticleController::class,'store']);
