<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('api/v1/pintemplate', 'AhmadFatoni\ApiGenerator\Controllers\API\PinController', ['except' => ['destroy', 'create', 'edit']]);
Route::resource('api/v1/pin', 'AhmadFatoni\ApiGenerator\Controllers\API\PinController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v1/pin/{id}/delete', ['as' => 'api/v1/pin.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\PinController@destroy']);

Route::post('api/v1/pintemplate', array('as' => 'api/v1/pintemplate.getpin', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\PinController@getpin'));
