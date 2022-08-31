<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@main')->name('main');

Route::get('/author', 'MainController@author')->name('author');
Route::get('/author/{id}', 'MainController@thisauthor')->name('thisauthor');


Route::get('/books', 'MainController@books')->name('books');
Route::get('/books/{id}', 'MainController@thisbook')->name('thisbook');
Route::get('/books/{id}/update', 'MainController@thisbookupd')->name('thisbookupd');
Route::get('/books/{id}/delete', 'MainController@thisbookdel')->name('thisbookdel');
Route::post('/books/{id}/update', 'MainController@thisbookcrudok')->name('thisbookcrudok');

Route::get('/add', 'MainController@add')->name('add');

Route::post('/add/check', 'MainController@add_check');
