<?php

Route::group(['prefix' => 'banner'], function() {
  Route::get('', 'BannerController@index')->name('admin.banner.index');
  Route::get('create/', 'BannerController@create')->name('admin.banner.create');
  Route::post('store', 'BannerController@store')->name('admin.banner.store');
  Route::get('destroy/{id?}', 'BannerController@destroy')->name('admin.banner.destroy');
});
