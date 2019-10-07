<?php

// Admin Routes
Route::get('/', function () {
    dd('Hello World');
});

Route::resource('blogs', 'Admin\BlogController');
Route::get('/', 'Admin\BlogController@index')->name('admin');