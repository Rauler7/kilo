<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'InquiryController@create');
Route::get('usage', 'UsageController@create');


// Route::get('usage', 'UsageController@create');
// Route::get('tip', 'TipController@create');
Route::controller('inquiry', 'InquiryController', array('only' => array('create', 'store')));
Route::controller('usage', 'UsageController', array('only' => array('create', 'store')));
Route::controller('complaint', 'ComplaintController', array('only' => array('create', 'store')));
