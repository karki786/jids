<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Frontend'], function () {


    //User
    Route::get('/', 'Home\HomeController@index');

//about
    Route::get('/about', 'AboutController@about');

    //Project
    Route::get('/upcomming-project', 'ProjectController@project');
    Route::get('/upcomming-project-detail/{id}', 'ProjectController@projectDetails');


    //News
    Route::get('/news', 'NewsController@news');
    Route::get('/news-detail/{id}', 'NewsController@newsDetails');


    //Event
    Route::get('/events', 'EventController@event');
    Route::get('/events-detail/{id}', 'EventController@eventDetails');


//Career
    Route::get('/career', 'CareerController@careerList');
    Route::get('/career-detail/{id}', 'CareerController@careerDetails');
    Route::post('store/career/{id}', 'CareerController@storeCareer');

    //Contact
    Route::get('/contact', 'ContactController@contact');
    Route::post('store/contact', 'ContactController@storeContact');

    //Gallery
    Route::get('/gallery', 'GalleryController@index');

    //Our Team
    Route::get('/team', 'TeamController@index');

    //Report
    Route::get('/report', 'AboutController@report');
    Route::get('/committee', 'AboutController@committee');
    Route::get('/download/report/{id}', 'AboutController@downloadReport');

});

