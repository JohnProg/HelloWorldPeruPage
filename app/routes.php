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
	Route::get('/blog/list', 'blogController@showAllPostsUsers');    
	Route::get('/blog/{slug}', 'blogController@showOnePostsUsers');

    
    //Login
    Route::get('login', 'HomeController@showLogin');
    Route::post('login', 'HomeController@doLogin');
    Route::get('/logout', 'HomeController@doLogout');

    //Rgister
//    Route::get('/register', 'HomeController@showRegister');
//    Route::post('/register', 'HomeController@doRegister');
    //Test
    Route::get('/test', 'HomeController@showTest');

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
    Route::get('/blog/create', 'blogController@createPost');
    Route::post('/blog/create', array('as'=> 'blog_create', 'uses' => 'blogController@createPost'));

    Route::get('/blog/post/update/{pk}', array('as'=>'post_update', 'uses'=>'blogController@updatePost'));
    Route::post('/blog/post/update/{pk}', array('as'=>'post_update', 'uses'=>'blogController@updatePost'));

    Route::get('/blog/post/delete/{pk}', array('as'=>'post_delete', 'uses'=>'blogController@getDeletePost'));

    Route::get('blog/posts', array('as'=>'admin_posts', 'uses'=>'blogController@showAllPosts'));


    //Messages
    Route::get('/messages', array('as' => 'admin_messages', 'uses' => 'Dashboard\ContactController@getListComment'));
    Route::get('/messages/delete/{pk}', array('as' => 'admin_messages_delete', 'uses' => 'Dashboard\ContactController@getDeleteComment'));

    //Projects
    Route::get('/projects', array('as' => 'admin_projects', 'uses' => 'Dashboard\ProjectController@getListProject'));

    Route::get('/projects/create', array('as' => 'admin_projects_create', 'uses' => 'Dashboard\ProjectController@getFormCreateProject'));
    Route::post('/projects/save', array('as' => 'admin_projects_save', 'uses' => 'Dashboard\ProjectController@postCreateProject'));

    Route::get('/projects/delete/{pk}', array('as' => 'admin_projects_delete', 'uses' => 'Dashboard\ProjectController@getDeleteProject'));
    Route::get('/projects/photo/delete/{pk}', array('as' => 'admin_projects_photo_delete', 'uses' => 'Dashboard\ProjectController@getDeletePhoto'));

    Route::get('/projects/update/{pk}', array('as' => 'admin_projects_update', 'uses' => 'Dashboard\ProjectController@getUpdateProject'));
    Route::put('/projects/update/form/{pk}', array('as' => 'admin_projects_update_form', 'uses' => 'Dashboard\ProjectController@putUpdateProject'));
    Route::post('/projects/photos/upload/{pk}', array('as' => 'admin_projects_photo_upload', 'uses' => 'Dashboard\ProjectController@postUpload'));

    Route::get('/projects/data-json/{pk}', array('as' => 'admin_projects_data_json', 'uses' => 'Dashboard\ProjectController@getData'));
    Route::get('/projects/data-json/photos/{pk}', array('as' => 'admin_projects_data_photo_json', 'uses' => 'Dashboard\ProjectController@getPhotos'));

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

if(Config::get('app.debug') == false){
    App::error(function(Exception $exception, $code)
    {
        return View::make('500');
    });
    App::missing(function($exception)
    {
        return View::make('404');
    });
}