<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
    Route::get('/home', 'HomeController@index')->name('Home')->middleware('auth');
});



Route::group(['middleware'=>['auth']], function (){


	Route::get('/logout',          'userController@logout')->name("logout");
    Route::post('/newPassword',    'userController@newPassword')->name("newPassword");

	Route::get('/dashboard',        'userController@loaddashboard')->name("loaddashboard");
	Route::get('/profile',         'userController@loadProfile')->name("loadProfile");
	Route::post('/profile',         'userController@doEditProfile')->name("doEditProfile");
	Route::get('/uploadProfile',   'userController@uploadProfile')->name("uploadProfile");
    Route::post('/addProfile',      'userController@addProfile')->name("addProfile");
    Route::post('/profile/pic/update', 'userController@doEditProfilePic')->name("doEditProfilePic");

	Route::get('/create',           'informationController@create')->name("create");
	Route::post('/form',            'informationController@form')->name("form");
	Route::get('/info_page',        'informationController@info_page')->name("info_page");
	Route::get('/edit_info/{id}',   'informationController@edit_info')->name("edit_info");
	Route::post('/editInfo/{id}',   'informationController@editInfo')->name("editInfo");
	Route::get('/deletePost/{id}',   'informationController@deletePost')->name("deletePost");
	Route::post('/deletePost/{id}',   'informationController@destroy')->name("deletePost");
	Route::get('/more/info/{id}/{title}', 'informationController@moreInfo')->name("moreInfo");
	Route::get('/more/info/{id}/{title}', 'informationController@moreInfo')->name("moreInfo");
	Route::get('/manage_info',      'informationController@manage_info')->name("manage_info");
	Route::get('/events',           'eventController@events')->name("events");
	Route::post('/addevent',        'eventController@addevent')->name("addevent");
	Route::get('/all_events',       'eventController@all_events')->name("all_events");
	Route::get('/acceptEvents/{id}','eventController@acceptEvents')->name("acceptEvents");
	Route::get('/resource',         'resourceController@resource')->name("resource");
	Route::post('/addresource',     'resourceController@addresource')->name("addresource");
	Route::get('/view_resources',   'resourceController@view_resources')->name("view_resources");

	Route::get('/view',   'resourceController@viewSingleResoure')->name("viewSingleResoure");

    Route::get('/timeline',         'timelineController@timeline')->name("timeline");
    Route::post('/like/{id}',       'timelineController@like')->name("like");
    Route::get('/timelineForm',     'timelineController@timelineForm')->name("timelineForm");
    Route::post('/addtimeline',     'timelineController@addtimeline')->name("addtimeline");
    Route::get('/readMore/{id}',    'timelineController@readMore')->name("readMore");
    Route::get('/create_network',   'timelineController@create_network')->name("create_network");
    Route::post('/addNetwork',       'timelineController@addNetwork')->name("addNetwork");
    Route::post('/add/comment/timeline','timelineController@addTimelineComment')->name("addTimelinecomment");
    Route::get('/delete/{id}',      'timelineController@deletePost')->name("deletePost");
	Route::get('/watch/resource/{id}','resourceController@watch_resource')->name("watch_resource");
	Route::post('/addcomment/{id}',   'resourceController@addcomment')->name("addcomment");
    Route::post('/comment/{id}',       'resourceController@comment')->name("comment");
	Route::get('/home', 'HomeController@index')->name('home');

});

