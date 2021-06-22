<?php

Route::get('/', 'UserController@index')->name('user.index');

Route::group(['prefix' => '/user'], function() {
    Route::get('/report', 'UserController@report')->name('user.store');
    Route::post('/store', 'UserController@store')->name('user.store');
});
