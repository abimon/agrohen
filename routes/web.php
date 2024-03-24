<?php

use App\Http\Controllers\articlesController;
use App\Http\Controllers\Comment;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/article',[HomeController::class,'articles']);
Route::get('/article/{slug}',[HomeController::class,'article']);
Route::get('/like/{id}',[articlesController::class,'like']);
Route::resources([
    'comment'=>CommentsController::class,
]);
Route::get('/products', [productsController::class,'home']);
Route::get('/search', [productsController::class,'search']);
Route::middleware('auth','isAdmin')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/',[HomeController::class,'dashboard']);
    });
    Route::resources([
        'articles'=>articlesController::class,
        'product'=>productsController::class,
    ]);
});