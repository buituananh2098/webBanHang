<?php

Route::group(['prefix' => 'quote'], function() {
    Route::get('', 'QuoteController@index')->name('admin.quote.index');
    Route::get('edit/{id}', 'QuoteController@edit')->name('admin.quote.edit');
    Route::post('update/{id}', 'QuoteController@update')->name('admin.quote.update');
});
