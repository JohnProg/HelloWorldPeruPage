<?php

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
$optionsFront = array();
Route::group($optionsFront, function()
{
	Route::get('/blog', 'blogController@showAllArticles');    
	Route::get('/blog/{id}', 'blogController@showOneArticle');
    

    Route::get('/login', 'HomeController@showLogin');
    Route::post('/login', 'HomeController@doLogin');
    Route::get('/logout', 'HomeController@doLogout');

    Route::get('/register', 'HomeController@showRegister');

    Route::get('/', array('as'=>'home', 'uses'=>'HomeController@getIndex'));
    Route::get('/test', array('as'=>'test', 'uses'=>'ContactController@getList'));
    Route::post('/contact', 'ContactController@postContactCreate');

//   Route::get('/prueba/{id}/{nombre?}/', function($id, $nombre='aaa'){
//       return 'User: '.$id.' su nombre es: '.$nombre;
//   });
});
// /*
// |--------------------------------------------------------------------------
// | Dashboard
// |--------------------------------------------------------------------------
// */

$optionsBack = array('before' => 'auth');
Route::group($optionsBack, function()
{   
    Route::get('/dashboard', 'HomeController@showDashboard');
    Route::get('/blog/create', 'blogController@createOneArticle');
    Route::post('/blog/create', 'blogController@createOneArticle');
});