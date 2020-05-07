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
    return view('frontend.home');
});

Route::get('/bookmarks', function () {
    return view('frontend.bookmarks');
});

Route::get('/search', function () {
    return view('frontend.search');
});

Route::get('/create', function () {
    return view('frontend.create');
});

Route::get('/register', function () {
    return view('frontend.register.register');
});

Route::get('/login', function () {
    return view('frontend.register.login');
});
