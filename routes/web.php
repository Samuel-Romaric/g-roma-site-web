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

Route::get('/', 'PagesController@index')->name('home');

Route::get('formation', 'PagesController@formation')->name('formation');

Route::get('contact', 'PagesController@contact')->name('contact');

Route::get('portfolio', 'PagesController@portfolio')->name('portfolio');

Route::get('services', 'PagesController@services')->name('services');

Route::get('blog', 'PagesController@blog')->name('blog');
