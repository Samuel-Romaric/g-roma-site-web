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

Route::get('portfolio', 'PagesController@portfolio')->name('portfolio');

Route::get('technologie', 'PagesController@technologie')->name('technologie');

Route::get('managment', 'PagesController@managment')->name('managment');

Route::get('conseil', 'PagesController@conseil')->name('conseil');

Route::get('partenaires', 'PagesController@partenaires')->name('partenaires');

Route::get('apropos', 'PagesController@apropos')->name('apropos');

Route::get('contact', 'PagesController@contact')->name('contact');






Route::get('formation', 'PagesController@formation')->name('formation');


// Route::get('services', 'PagesController@services')->name('services');




