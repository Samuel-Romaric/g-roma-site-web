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

Route::get('apropos', 'PagesController@apropos')->name('apropos');

Route::get('formation', 'PagesController@formation')->name('formation');

Route::get('competence', 'PagesController@competence')->name('competence');

Route::get('experience', 'PagesController@experience')->name('experience');

Route::get('contacter', 'PagesController@contacter')->name('contacter');