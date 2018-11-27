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


Route::get('/', 'PagesController@main')->name('main');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');

Route::get('/men', 'ProductController@indexmen')->name('men');
Route::get('/women', 'ProductController@indexwomen')->name('women');
Route::get('/kids', 'ProductController@indexkids')->name('kids');

Route::get('/show/{id}', 'ProductController@show')->name('front.product.show');
Route::get('/search', 'ProductController@search')->name('product.search');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    Route::resource('/products', 'AdminProductController');
    Route::resource('/users', 'AdminUserController');
});

Route::get('/profile', "UserController@show")->name("profile")->middleware('auth');

Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');

Route::get('/cart', 'CartController@show')->name('cart')->middleware('auth');
Auth::routes();


Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

    // Route::resource('/update', 'Auth\UserUpdate')->middleware('auth');
    Route::get('/edit/{id}', 'UserUpdate@edit')->middleware('auth')->name('edit');
    Route::put('/update/{id}', 'UserUpdate@update')->name('update');