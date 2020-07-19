<?php 

Route::group(['prefix' => 'role'], function() {
  Route::get('', 'RoleController@index')->name('admin.role.index');
  Route::get('create', 'RoleController@create')->name('admin.role.create');
  Route::post('store', 'RoleController@store')->name('admin.role.store');
  Route::get('edit/{id}', 'RoleController@edit')->name('admin.role.edit');
  Route::post('update/{id}', 'RoleController@update')->name('admin.role.update');
  Route::get('destroy/{id?}', 'RoleController@destroy')->name('admin.role.destroy');
});