<?php

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
$optionsFront = array();
Route::group($optionsFront, function()
{
    Route::get('/', function()
    {
        return View::make('home');
    });

    Route::post('/login', function()
    {
        return View::make('home');
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