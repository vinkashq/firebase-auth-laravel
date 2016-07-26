<?php

Route::group(['middlewareGroups' => 'web'], function () {

Route::get('auth', 'Vinkas\Firebase\Auth\Http\AuthController@getAuth')->name('getAuth');
Route::post('auth', 'Vinkas\Firebase\Auth\Http\AuthController@postAuth')->name('postAuth');
Route::get('logout', 'Vinkas\Firebase\Auth\Http\AuthController@logout')->name('logout');

});
