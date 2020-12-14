<?php

use Illuminate\Support\Facades\Route;
// use App\Mail\ConctactMail;

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

Route::get('services', 'PagesController@services')->name('services');

Route::get('apropos', 'PagesController@apropos')->name('apropos');

// Manage the mail sending

Route::get('contact', 'ContactFormController@contact')->name('contact');

Route::post('contact', 'ContactFormController@send_Mail')->name('send_Mail');

// Test mail html
// Route::get('test-email', function ()
// {
// 	return new ConctactMail('Romaric GUEI', 'romi@sami.com', 'Recontre', 'Je desire vous rencontrer pour un eventuel entretient');
// });
