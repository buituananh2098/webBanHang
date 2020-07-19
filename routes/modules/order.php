<?php

Route::group(['prefix' => 'order'], function() {
    Route::get('', 'OrderController@index')->name('admin.order.index');
    Route::get('create', 'OrderController@create')->name('admin.order.create');
    Route::post('store','OrderController@store' )->name('admin.order.store');
    Route::get('edit/{id}', 'OrderController@edit')->name('admin.order.edit');
    Route::post('update/{id}', 'OrderController@update')->name('admin.order.update');
});
