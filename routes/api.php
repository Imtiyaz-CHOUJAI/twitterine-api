<?php

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'jwt.verify'], function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('me', 'AuthController@me');
});