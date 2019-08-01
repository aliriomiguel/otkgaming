<?php

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
    return view('welcome');
});

Route::resource('posts','PostController');
Route::resource('abouts','AboutController');
Route::resource('services','ServiceController');
Route::resource('portfolios','PortfolioController');
Route::resource('quotes','QuotesController');
Route::resource('contacts','ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
