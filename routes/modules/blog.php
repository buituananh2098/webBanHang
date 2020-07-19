<?php
Route::group(['prefix' => 'blog'], function() {
    Route::get('', 'BlogController@index')->name('admin.blog.index');
    Route::get('create/{cateParent?}', 'BlogController@create')->name('admin.blog.create');
    Route::post('store', 'BlogController@store')->name('admin.blog.store');
    Route::post('upload', 'BlogController@uploadFIle')->name('admin.blog.upload');
    Route::get('edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
    Route::post('update/{id}', 'BlogController@update')->name('admin.blog.update');
    Route::get('destroy/{id?}', 'BlogController@destroy')->name('admin.blog.destroy');
    Route::get('search', 'BlogController@search')->name('admin.blog.search');
});
