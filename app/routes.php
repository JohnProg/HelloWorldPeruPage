<?php

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
$optionsFront = array();
Route::group($optionsFront, function()
{
    //Home
    Route::get('/', array('as'=>'home', 'uses'=>'HomeController@getIndex'));
    Route::post('/contact', 'ContactController@postContactCreate');

    //Blog
	Route::get('/blog', 'blogController@showAllArticles');    
	Route::get('/blog/{id}', 'blogController@showOneArticle');
    
    //Login
    Route::get('/login', 'HomeController@showLogin');
    Route::post('/login', 'HomeController@doLogin');
    Route::get('/logout', 'HomeController@doLogout');

    //Rgister
    Route::get('/register', 'HomeController@showRegister');
});
// /*
// |--------------------------------------------------------------------------
// | Dashboard
// |--------------------------------------------------------------------------
// */

$optionsBack = array(
    'before' => 'auth',
    'prefix' => 'admin'
);
Route::group($optionsBack, function()
{

    Route::get('/dashboard', 'HomeController@showDashboard');
    //Blog
    Route::get('/blog/create', 'blogController@createOneArticle');
    Route::post('/blog/create', 'blogController@createOneArticle');

    //Messages
    Route::get('/messages', 'Dashboard\ContactController@getListComment');
    //Projects


});