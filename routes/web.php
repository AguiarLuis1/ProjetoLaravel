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
//form to contact
Route::get('/contact', 'ContactFormController@create')->name('contact.create')->middleware('auth');

//submit contact
Route::post('/contact', 'ContactFormController@store')->name('contact.store')->middleware('auth');

//show all books
Route::get('/', 'BooksController@showAll');

//show one book
Route::get('/book/{id}', 'BooksController@view');

//insert
Route::post('/book', 'BooksController@store')->name('books.store')->middleware('auth');

//delete book
Route::delete('/book/{id}', 'BooksController@delete')->name('books.delete')->middleware('auth');

//Get form to update
Route::get('/book/{id}/edit', 'BooksController@edit')->name('books.edit')->middleware('auth');

//Update
Route::put('/book/{id}/edit', 'BooksController@editSubmit')->name('books.update')->middleware('auth');

//show my books
Route::get('/mybooks', 'BooksController@showMyBooks')->name('books.mybooks')->middleware('auth');

Route::get('/create', 'BooksController@create')->name('books.create')->middleware('auth');

Route::get('user/edit', 'UserController@edit')->name('user.edit')->middleware('auth');

Route::put('user/edit', 'UserController@editSubmit')->name('user.update')->middleware('auth');

//Add a book to the cart
Route::get('cart/add/{id}', 'BooksController@addToCart')->name('book.addToCart')->middleware('auth');

Route::get('cart', 'BooksController@showCart')->name('books.showCart')->middleware('auth');

//mostra a vista do checkout
Route::get('checkout', 'BooksController@checkout')->name('books.checkout')->middleware('auth');

//executa a compra
Route::post('checkout', 'BooksController@postCheckout')->name('books.postCheckout')->middleware('auth');

Auth::routes();
