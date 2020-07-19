<?php 

Route::group(['prefix' => 'user'], function() {
  Route::get('', 'UserController@index')->name('admin.user.index');
  Route::get('create', 'UserController@create')->name('admin.user.create');
  Route::post('store', 'UserController@store')->name('admin.user.store');
  Route::get('edit/{id}', 'UserController@edit')->name('admin.user.edit');
  Route::post('update/{id}', 'UserController@update')->name('admin.user.update');
  Route::get('destroy/{id?}', 'UserController@destroy')->name('admin.user.destroy');
});