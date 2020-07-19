<?php 

Route::group(['prefix' => 'product'], function() {
  Route::get('', 'ProductController@index')->name('admin.product.index');
  Route::get('create', 'ProductController@create')->name('admin.product.create');
  Route::post('store', 'ProductController@store')->name('admin.product.store');
  Route::get('edit/{id}', 'ProductController@edit')->name('admin.product.edit');
  Route::post('update/{id}', 'ProductController@update')->name('admin.product.update');
  Route::get('destroy/{id?}', 'ProductController@destroy')->name('admin.product.destroy');
});