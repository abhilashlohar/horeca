<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('users', 'UserController@index')->name('users.index');
?>