<?php
Route::get('/', 'FrontendController@index')->name('att.index');
Route::get('/new-demo', 'FrontendController@index2')->name('index2');
Route::get('dang-nhap', 'FrontendController@login')->name('att.page.login');
Route::post('dang-nhap', 'FrontendController@loginPost')->name('att.login');
Route::get('dang-xuat', 'FrontendController@logout')->name('att.logout');

Route::get('dang-ky', 'FrontendController@register')->name('att.page.register');
Route::post('dang-ky', 'FrontendController@registerPost')->name('att.register');

Route::get('ro-hang', 'FrontendController@basket')->name('basket');
Route::get('add-to-cart', 'QuoteController@addToCart')->name('att.addcart');
Route::get('cart-remove/{quote_id}/{item_id}', 'QuoteController@removeItem')->name('att.remove.item');
Route::get('ro-hang', 'FrontendController@basket')->name('att.basket');
Route::get('thanh-toan', 'FrontendController@checkout')->name('att.checkout');
Route::post('thanh-toan-submit', 'OrderController@setOrder')->name('att.checkout.submit');
Route::get('tt', 'FrontendController@test')->name('tt');

Route::get('san-pham-moi', 'FrontendController@getNewProducts')->name('att.page.sanphammoi');
Route::get('san-pham-ban-chay', 'FrontendController@getHotProducts')->name('att.page.sanphambanchay');
Route::post('thanh-toan-momo', 'FrontendController@paymentMomo')->name('att.payment');

Route::get('/blog/{slug?}/{id?}', 'BlogController@blogWithCate')->name('frontend.blog.blogWithCate');
Route::get('search-blog', 'BlogController@blogWithTitle')->name('frontend.blog.blogWithTitle');
Route::get('return-vnpay', 'OrderController@return_vnp')->name('frontend.blog.payvpn');
