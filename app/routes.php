<?php

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
$optionsFront = array();
Route::group($optionsFront, function()
{

	Route::get('blog', 'blogController@showAllArticles');    
	Route::get('blog/{id}', 'blogController@showOneArticle');
    
    Route::get('/', function()
    {
        return View::make('home');
    });

    Route::get('login', function(){
        return View::make('auth/login');
    });
    Route::post('login', 'HomeController@doLogin');
    Route::get('logout', 'HomeController@doLogout');


    Route::get('/register', function(){
        return View::make('auth/register');
    });   
    Route::post('/register', 'HomeController@doRegister');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

$optionsBack = array('before' => 'auth');
Route::group($optionsBack, function()
{   
    Route::get('dashboard', 'HomeController@showDashboard');
    Route::get('blog/create', 'blogController@createOneArticle');
    Route::post('blog/create', 'blogController@createOneArticle');
});