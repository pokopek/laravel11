<?php

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
    return view('home',['title'=>"Home Page"]);
});
Route::get('/contact', function () {
    return view('contact',['title'=>"ini halaman contact"]);
});
Route::get('/blog', function () {
    return view('blog',['title'=>"ini halaman blog"]);
});
Route::get('/about', function () {
    return view('about',['title'=>"ini halaman about",'nama'=>"darwanto"]);
});

