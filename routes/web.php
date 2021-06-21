<?php

Route::get('/', 'UserController@index')->name('user.index');

Route::group(['prefix' => '/user'], function() {
    Route::post('/store', 'UserController@store')->name('user.store');
});
