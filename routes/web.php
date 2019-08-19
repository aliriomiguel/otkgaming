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

Route::resource('/', 'WelcomeController');
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::resource('dashboard', 'DashboardController');
/* Route::get('/dashboard',function(){
    return view('dashboard');
}); */

Route::resource('posts','PostController');
Route::post('/posts/{post}/setfeatured','PostController@setFeatured');
Route::post('/posts/{post}/unsetfeatured','PostController@unsetFeatured');

Route::resource('abouts','AboutController');
Route::post('/abouts/{about}/showlanding','AboutController@showLanding');
Route::post('/abouts/{about}/hidelanding','AboutController@hideLanding');

Route::resource('services','ServiceController');
Route::resource('portfolios','PortfolioController');
Route::resource('quotes','QuotesController');
Route::resource('contacts','ContactController');
Route::resource('categories','CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
