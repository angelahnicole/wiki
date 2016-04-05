<?php
Route::group(['domain' => 'wiki.stellar.polymorphixgaming.com'], function () 
{
  Route::group(['namespace' => 'Taskforcedev\Wiki\Http\Controllers'], function() 
  {
  
    Route::get('install', ['as' => 'wiki.install', 'uses' => 'AdminController@install']);
    
    Route::get('{page}', ['as' => 'wiki.page.view', 'uses' => 'WikiController@view']);
    Route::post('page', ['as' => 'wiki.page.create', 'uses' => 'WikiController@create']);
  
  });
});
