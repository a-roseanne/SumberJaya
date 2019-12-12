<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/products', 'PagesController@products');
Route::get('/products/{id}', 'PagesController@show');
Route::get('/products/find', 'PagesController@find');

Route::get('/admin', 'ProductsController@admin');

Route::resource('/admin/products', 'ProductsController');

// Route::get('/admin/products/{id}', 'ProductsController@show');

// Route::post('/admin/products/create', 'ProductsController@create');

Auth::routes();

// Route::get('/post','PostController@post')-> name('post.post');
Route::get('/post', 'PostController@blog');
Route::get('/post/{id}', 'PostController@show');

Route::get('/admin/post', 'PostController@post')-> name('post.post');
Route::get('/admin/post/coba','PostController@blogs');
Route::get('/admin/post/create','PostController@create')-> name('post.create');
Route::post('/admin/post/create','PostController@store')-> name('post.store');
Route::get('/admin/post/{id}/edit','PostController@edit')->name('post.edit');
Route::get('/admin/post/{id}/delete','PostController@destroy')->name('post.delete');

Route::post('/post/{id}/comment','PostCommentController@store')->name('post.comment.store');

Route::patch('/post/{id}/edit','PostController@update')->name('post.update');
