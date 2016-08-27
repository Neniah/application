<?php


Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::resource('posts', 'PostController');
