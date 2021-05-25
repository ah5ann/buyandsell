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

Route::get('/', 'AppController@index')->name('site');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ProductController@shop')->name('shop');
Route::get('/accessories', 'ProductController@accessories')->name('accessories');
Route::get('/laptops', 'ProductController@laptops')->name('laptops');
Route::get('/screens', 'ProductController@screens')->name('screens');
Route::get('/mobiles', 'ProductController@mobiles')->name('mobiles');
Route::get('/contact', 'ProductController@index')->name('contact');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/newad', 'ProfileController@new_ad')->name('addproduct');
Route::get('/search', 'HomeController@search')->name('search');

Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('sales', 'SalesController');
