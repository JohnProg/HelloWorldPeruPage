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
    Route::post('contact', 'HomeController@contactCreate');


    Route::get('/prueba/{id}/{nombre?}', function($id, $nombre){
        return 'User: '.$id.' su nombre es: '.$nombre;
    });
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