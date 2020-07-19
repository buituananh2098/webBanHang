<?php
Route::group(['prefix' => 'blog-category'], function() {
    Route::get('', 'BlogCategoryController@index')->name('admin.blog_category.index');
    Route::get('create/{cateParent?}', 'BlogCategoryController@create')->name('admin.blog_category.create');
    Route::post('store', 'BlogCategoryController@store')->name('admin.blog_category.store');
    Route::get('edit/{id}', 'BlogCategoryController@edit')->name('admin.blog_category.edit');
    Route::post('update/{id}', 'BlogCategoryController@update')->name('admin.blog_category.update');
    Route::get('destroy/{id?}', 'BlogCategoryController@destroy')->name('admin.blog_category.destroy');
});
