<?php
Route::get('/', function() {
  return redirect()->route('login');
});
Route::get('dashboard', function() {
  return view('backend.dashboard.dashboard');
})->name('admin.dashboard');


