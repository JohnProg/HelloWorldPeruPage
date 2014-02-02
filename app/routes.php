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
    Route::get('/projects', array('as' => 'api_projects', 'uses' => 'Dashboard\ProjectController@getData'));
    Route::get('/projects2', array('as' => 'api_projects2', 'uses' => 'Api\ProjectController@getData'));

//    Route::get('/dashboard', 'HomeController@showDashboard');
//    //Blog
//
//    Route::get('/blog/create', 'blogController@createOneArticle');
//    Route::post('/blog/create', 'blogController@createOneArticle');
//
//    //Messages
//    Route::get('/messages', array('as' => 'admin_messages', 'uses' => 'Dashboard\ContactController@getListComment'));
//    Route::get('/messages/delete/{pk}', array('as' => 'admin_messages_delete', 'uses' => 'Dashboard\ContactController@getDeleteComment'));
//
//    //Projects
//    Route::get('/projects', array('as' => 'admin_projects', 'uses' => 'Dashboard\ProjectController@getListProject'));
//
//    Route::get('/projects/create', array('as' => 'admin_projects_create', 'uses' => 'Dashboard\ProjectController@getFormCreateProject'));
//    Route::post('/projects/save', array('as' => 'admin_projects_save', 'uses' => 'Dashboard\ProjectController@postCreateProject'));
//
//    Route::get('/projects/delete/{pk}', array('as' => 'admin_projects_delete', 'uses' => 'Dashboard\ProjectController@getDeleteProject'));
//    Route::get('/projects/photo/delete/{pk}', array('as' => 'admin_projects_photo_delete', 'uses' => 'Dashboard\ProjectController@getDeletePhoto'));
//
//    Route::get('/projects/update/{pk}', array('as' => 'admin_projects_update', 'uses' => 'Dashboard\ProjectController@getUpdateProject'));
//    Route::put('/projects/update/form/{pk}', array('as' => 'admin_projects_update_form', 'uses' => 'Dashboard\ProjectController@putUpdateProject'));
//    Route::post('/projects/photos/upload/{pk}', array('as' => 'admin_projects_photo_upload', 'uses' => 'Dashboard\ProjectController@postUpload'));
//
//    Route::get('/projects/data-json/{pk}', array('as' => 'admin_projects_data_json', 'uses' => 'Dashboard\ProjectController@getData'));
//    Route::get('/projects/data-json/photos/{pk}', array('as' => 'admin_projects_data_photo_json', 'uses' => 'Dashboard\ProjectController@getPhotos'));



});

// /*
// |--------------------------------------------------------------------------
// | Appi
// |--------------------------------------------------------------------------
// */
$optionsApi = array(
    'prefix' => 'api'
);

Route::group($optionsApi, function()
{
    Route::get('/projects', array('as' => 'api_projects', 'uses' => 'Api\ProjectController@getData'));
});