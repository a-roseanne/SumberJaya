<?php

use App\Mail\MyMail;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/products/find', 'PagesController@find');

Route::get('/cart', 'PagesController@cart');
Route::get('/add-to-cart/{id}', 'PagesController@addToCart');
Route::patch('update-cart', 'PagesController@update');
Route::delete('remove-from-cart', 'PagesController@remove');

Route::get('/checkout', 'CheckoutController@index')-> name('checkout.index');

Route::post('/sendmail', function(Request $request, mailer $mailer){
    $mailer
        ->to($request->input('mail'))
        ->send(new MyMail($request->input('title')));
    return redirect()->back()->with('success', 'Pesanan dikonfirmasi, silakan cek email Anda');
})-> name('sendmail');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/products', 'PagesController@products');
Route::get('/products/{id}', 'PagesController@show');

Route::get('/admin', 'ProductsController@admin');

Route::resource('/admin/products', 'ProductsController');

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
