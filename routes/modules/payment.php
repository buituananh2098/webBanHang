<?php

Route::group(['prefix' => 'payment'], function() {
    Route::get('', 'PayMentController@index')->name('admin.payment.index');
    Route::get('edit/{id}', 'PayMentController@edit')->name('admin.payment.edit');
//    Route::post('update/{id}', 'PayMentController@update')->name('admin.payment.update');
    Route::post('update/{id}', 'PayMentController@update')->name('admin.payment.update');
});
