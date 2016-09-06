<?php

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
  ->where('slug', '[\w\d\-\_]');
Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::resource('posts', 'PostController');
