<?php

Route::group(['prefix' => 'category'], function() {
  Route::get('', 'CategoryController@index')->name('admin.category.index');
  Route::get('create/{cateParent?}', 'CategoryController@create')->name('admin.category.create');
  Route::post('store', 'CategoryController@store')->name('admin.category.store');
  Route::get('edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
  Route::post('update/{id}', 'CategoryController@update')->name('admin.category.update');
  Route::get('destroy/{id?}', 'CategoryController@destroy')->name('admin.category.destroy');
});
