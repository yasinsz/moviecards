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

Route::get('/create', function () {
    return view('frontend.create');
});

Route::get('/register', function () {
    return view('frontend.register.register');
});

Route::get('/login', function () {
    return view('frontend.register.login');
});






// Route::get('/search', function () {
//     return view('frontend.search.search');
// });

// Route::get('/search/movie', function () {
//     return view('frontend.search.show');
// });


Route::get('/search', 'SearchController@index')->name('index');

Route::get('/search/movies/{movie}', 'SearchController@show')->name('show');



// Routes for my add a card function

//Route::post('/',                'SearchController@store')->name('store');

//Route::patch('/update',            'SearchController@update')->name('update');



//new resource Controller
//Route::resource('/', 'CardController');

Route::post('/',                'CardController@store')->name('frontend.home.store');
Route::get('/',                'CardController@index')->name('frontend.home');
