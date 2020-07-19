<?php

Route::group(['prefix' => 'discount'], function() {
    Route::get('', 'DiscountController@index')->name('admin.discount.index');
    Route::get('create', 'DiscountController@create')->name('admin.discount.create');
    Route::post('store', 'DiscountController@store')->name('admin.discount.store');
    Route::get('edit/{id}', 'DiscountController@edit')->name('admin.discount.edit');
    Route::post('update/{id}', 'DiscountController@update')->name('admin.discount.update');
    Route::get('destroy/{id?}', 'DiscountController@destroy')->name('admin.discount.destroy');
});
