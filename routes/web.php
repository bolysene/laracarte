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

use App\Mail\ContactMessageCreated;


Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/test-email',function(){


	return new ContactMessageCreated('Boly','seneboly@gmail.com','Vous avez envie de découvrir un Framework Web, je vous conseille LARAVEL. Il est élégant et facile d\'apprentissage !');

});


Route::get('/contact', 'ContactsController@create')->name('contact');
Route::post('/contact', 'ContactsController@store')->name('contact.store');
