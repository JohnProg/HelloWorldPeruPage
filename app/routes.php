<?php

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
$optionsFront = array();
Route::group($optionsFront, function()
{

    Route::get('/', array('as'=>'home', 'uses'=>'HomeController@getIndex'));
    Route::get('/test', array('as'=>'test', 'uses'=>'ContactController@getList'));
    Route::post('contact', 'ContactController@postContactCreate');

//    Route::get('/prueba/{id}/{nombre?}/', function($id, $nombre='aaa'){
//        return 'User: '.$id.' su nombre es: '.$nombre;
//    });
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

$optionsBack = array();
Route::group($optionsBack, function()
{

});