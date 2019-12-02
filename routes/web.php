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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/products', 'PagesController@products');
Route::get('/products/{$id}', 'PagesController@show');

Route::get('/admin', 'ProductsController@admin');

Route::resource('/admin/products', 'ProductsController');


Route::get('/admin/products/{$id}', 'ProductsController@show');

Route::post('/admin/products/create', 'ProductsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post','PostController@create')-> name('post.index');
Route::get('/post/create','PostController@create')-> name('post.create');
Route::get('/post/create','PostController@store')-> name('post.Store');
Route::get('/post/{id}/edit','PostController@edit')->name('post.edit');

Route::patch('/post/{id}/edit','PostController@update')->name('post.update');
