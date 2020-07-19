<?php 

Route::group(['prefix' => 'trademark'], function() {
  Route::get('', 'TrademarkController@index')->name('admin.trademark.index');
  Route::get('create', 'TrademarkController@create')->name('admin.trademark.create');
  Route::post('store', 'TrademarkController@store')->name('admin.trademark.store');
  Route::get('edit/{id}', 'TrademarkController@edit')->name('admin.trademark.edit');
  Route::post('update/{id}', 'TrademarkController@update')->name('admin.trademark.update');
  Route::get('destroy/{id?}', 'TrademarkController@destroy')->name('admin.trademark.destroy');
});