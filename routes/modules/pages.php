<?php
Route::group(['prefix' => 'pages'], function() {
    Route::get('block/{block_code?}', 'PagesController@getBlock')->name('admin.pages.block');

    Route::get('', 'PagesController@getPage')->name('admin.pages.page');
});
