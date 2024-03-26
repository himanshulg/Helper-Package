<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'MyPackage'], function () {

    Route::get('/mypackage2', 'HelperController@hello');
});
