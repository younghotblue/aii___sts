<?php

Route::get('/', 'ProductController@index')->name('product.index');

Auth::routes();
Route::resource('/product', 'ProductController')->except(['index'])->middleware('auth');
Route::resource('/product', 'ProductController')->only(['show']);

Route::name('line_item.')
  ->group(
    function () {
      Route::post('/line_item/create', 'LineItemController@create')->name('create');
      Route::post('/line_item/delete', 'LineItemController@delete')->name('delete');
    }
  );

Route::name('cart.')
  ->group(
    function () {
      Route::get('/cart', 'CartController@index')->name('index')->middleware('auth');
      Route::get('/cart/checkout', 'CartController@checkout')->name('checkout');
      Route::get('/cart/success', 'CartController@success')->name('success');
    }
  );
