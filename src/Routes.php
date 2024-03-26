<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'MyPackage'], function () {

    Route::get('/day', 'HelperController@getDay');
});
