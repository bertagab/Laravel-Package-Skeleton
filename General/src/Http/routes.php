<?php

/*
|--------------------------------------------------------------------------
| demo package related Routes
|--------------------------------------------------------------------------
|
|
*/

# Sample routes


Route::group(['middleware' => 'web','namespace' => 'demo\General'],
  function () {
    Route::get('/sample',
      'Http\Controllers\demoGeneralController@index')->name('sample');

    Route::get('/sample1',
      'Http\Controllers\demoGeneralController@index')->name('sample1');
});
