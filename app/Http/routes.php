<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Dashboard for administartor

// User routes
Route::group(['middleware' => 'web'], function () {
    // Home page for the website.
    Route::get('/', 'PublicController@home');
    Route::get('/reviews', 'ReviewsController@index');
    Route::get('/reviews/get-latest', [ 'as' => 'reviews.latest', 'uses' => 'ReviewsController@getLatest']);
    Route::post('/reviews/store', [ 'as' => 'reviews.store', 'uses' => 'ReviewsController@store']);
//    Route::post('/reviews/store', 'ReviewsController@store');
    Route::get('/leave-question', 'ClientQuestionController@stores');
    Route::post('/leave-question', 'ClientQuestionController@store');


    Route::get('/register/{role?}', 'Auth\AuthController@showRegistrationForm');
    Route::auth();
    Route::get('login/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
    Route::get('/home', 'UserController@home');


    Route::get(trans_setlocale().'/admin', 'AdminController@home');
    Route::get(trans_setlocale().'admin/profile', 'AdminController@profile');
    Route::get(trans_setlocale().'admin/lock', 'AdminController@lock');
    Route::get(trans_setlocale().'admin/masters', 'AdminController@masters');
    Route::get(trans_setlocale().'admin/reports', 'AdminController@reports');
});

Route::group(['prefix' => trans_setlocale().'/admin/album', 'middleware' => ['web', 'auth.role:admin']], function () {
    Route::resource('album', 'AlbumAdminController');
});

// User routes for module
/*Route::group(['prefix' => trans_setlocale().'/user/page', 'middleware' => ['web', 'auth.role:user']], function () {
    Route::resource('page', 'PageUserController');
});*/

/*Route::get('/test', function () {
    return  \Menu::menu('admin', 'menu.admin');
});*/
