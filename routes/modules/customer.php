<?php

Route::group(['prefix' => 'customer'], function() {
    Route::get('', 'CustomerController@index')->name('admin.customer.index');
    Route::get('create', 'CustomerController@create')->name('admin.customer.create');
    Route::post('store', 'CustomerController@store')->name('admin.customer.store');
    Route::get('edit/{id}', 'CustomerController@edit')->name('admin.customer.edit');
    Route::post('update/{id}', 'CustomerController@update')->name('admin.customer.update');
    Route::get('destroy/{id?}', 'CustomerController@destroy')->name('admin.customer.destroy');
});
