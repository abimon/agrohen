<?php

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
Route::get('/products', function () {
    $gals = [['image' => '1ds', 'title' => '1 Day Chicks'], ['title' => "1 week rainbow rooster", 'image' => '1wrr'], ['title' => "2 week Sasso", 'image' => '2wsasso'], ['title' => "3 Week", 'image' => '3w'], ['title' => "4 week sasso", 'image' => '4w'], ['title' => "4 week old rainbow rooster", 'image' => '4wrr'], ['title' => "5 week old Sasso", 'image' => '5ws'], ['title' => "KARLO chicks", 'image' => 'kalro'],['title'=>'Brooder','image'=>'brooder'],['title'=>'Harchery','image'=>'harchery'],['title'=>'Packaging','image'=>'pack']];
    return view('products',compact('gals'));
});