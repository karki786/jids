<?php


Route::group(['middleware' => ['auth']], function () {
    Route::get('home', ['as' => 'home', 'uses' => 'Admin\Dashboard\DashboardController@index']);


    Route::group(['namespace' => 'Admin'], function () {
        Route::resource('role', 'User\RoleController');
        Route::put('role/update/{id}', 'User\RoleController@update');
        Route::get('role/delete/{id}', 'User\RoleController@destroy');

        //User
        Route::get('user', 'User\UserController@index');
        Route::get('user/create', 'User\UserController@create');
        Route::post('user/store', 'User\UserController@store');
        Route::get('user/edit/{id}', 'User\UserController@edit');
        Route::put('user/update/{id}', 'User\UserController@update');
        Route::get('user/delete/{id}', 'User\UserController@delete');

        //Setting
        Route::get('setting', 'Setting\SettingController@index');
        Route::post('setting/store', 'Setting\SettingController@UpdateCreate');

        //News
        Route::get('news', 'News\NewsController@index');
        Route::get('news/create', 'News\NewsController@create');
        Route::post('news/store', 'News\NewsController@store');
        Route::get('news/edit/{id}', 'News\NewsController@edit');
        Route::put('news/update/{id}', 'News\NewsController@update');
        Route::get('news/delete/{id}', 'News\NewsController@delete');

        //Upcoming Projects
        Route::get('project', 'Project\ProjectController@index');
        Route::get('project/create', 'Project\ProjectController@create');
        Route::post('project/store', 'Project\ProjectController@store');
        Route::get('project/edit/{id}', 'Project\ProjectController@edit');
        Route::put('project/update/{id}', 'Project\ProjectController@update');
        Route::get('project/delete/{id}', 'Project\ProjectController@delete');

        //Banner
        Route::get('banner', 'Banner\BannerController@index');
        Route::get('banner/create', 'Banner\BannerController@create');
        Route::post('banner/store', 'Banner\BannerController@store');
        Route::get('banner/edit/{id}', 'Banner\BannerController@edit');
        Route::put('banner/update/{id}', 'Banner\BannerController@update');
        Route::get('banner/delete/{id}', 'Banner\BannerController@delete');

        //Page Management
        Route::get('page', 'Page\PageController@index');
        Route::get('page/create', 'Page\PageController@create');
        Route::post('page/store', 'Page\PageController@store');
        Route::get('page/edit/{id}', 'Page\PageController@edit');
        Route::put('page/update/{id}', 'Page\PageController@update');
        Route::get('page/delete/{id}', 'Page\PageController@delete');

        //Job
        Route::get('job', 'Job\JobController@index');
        Route::get('job/create', 'Job\JobController@create');
        Route::post('job/store', 'Job\JobController@store');
        Route::get('job/edit/{id}', 'Job\JobController@edit');
        Route::put('job/update/{id}', 'Job\JobController@update');
        Route::get('job/delete/{id}', 'Job\JobController@delete');
        Route::get('job/view/{id}', 'Job\JobController@view');
        Route::get('/download/resume/{id}', 'Job\JobController@downloadCv');

        // Contact
        Route::get('contact', 'Contact\ContactController@index');


        //Pdf Management
        Route::get('pdf', 'Pdf\PdfController@index');
        Route::get('pdf/create', 'Pdf\PdfController@create');
        Route::post('pdf/store', 'Pdf\PdfController@store');
        Route::get('pdf/edit/{id}', 'Pdf\PdfController@edit');
        Route::put('pdf/update/{id}', 'Pdf\PdfController@update');
        Route::get('pdf/delete/{id}', 'Pdf\PdfController@delete');
        Route::get('/download/pdf/{id}', 'Pdf\PdfController@downloadPdf');

        //Pdf Management
        Route::get('team', 'Team\TeamController@index');
        Route::get('team/create', 'Team\TeamController@create');
        Route::post('team/store', 'Team\TeamController@store');
        Route::get('team/edit/{id}', 'Team\TeamController@edit');
        Route::put('team/update/{id}', 'Team\TeamController@update');
        Route::get('team/delete/{id}', 'Team\TeamController@delete');

        //Gallery Management
        Route::get('gallery', 'Gallery\GalleryController@index');
        Route::get('gallery/create', 'Gallery\GalleryController@create');
        Route::post('gallery/store', 'Gallery\GalleryController@store');
        Route::get('gallery/edit/{id}', 'Gallery\GalleryController@edit');
        Route::put('gallery/update/{id}', 'Gallery\GalleryController@update');
        Route::get('gallery/delete/{id}', 'Gallery\GalleryController@delete');


        //headerImage Management
        Route::get('headerImage', 'HeaderImage\HeaderImageController@index');
        Route::get('headerImage/create', 'HeaderImage\HeaderImageController@create');
        Route::post('headerImage/store', 'HeaderImage\HeaderImageController@store');
        Route::get('headerImage/edit/{id}', 'HeaderImage\HeaderImageController@edit');
        Route::put('headerImage/update/{id}', 'HeaderImage\HeaderImageController@update');
        Route::get('headerImage/delete/{id}', 'HeaderImage\HeaderImageController@delete');

// About
        Route::get('aboutEnglish', 'About\AboutController@index');
        Route::get('aboutEnglish/create', 'About\AboutController@create');
        Route::post('aboutEnglish/store', 'About\AboutController@store');
        Route::get('aboutEnglish/edit/{id}', 'About\AboutController@edit');
        Route::put('aboutEnglish/update/{id}', 'About\AboutController@update');
        Route::get('aboutEnglish/delete/{id}', 'About\AboutController@delete');


        Route::get('aboutNepali', 'About\AboutController@indexNepali');
        Route::get('aboutNepali/create', 'About\AboutController@createNepali');
        Route::post('aboutNepali/store', 'About\AboutController@storeNepali');
        Route::get('aboutNepali/edit/{id}', 'About\AboutController@editNepali');
        Route::put('aboutNepali/update/{id}', 'About\AboutController@updateNepali');
        Route::get('aboutNepali/delete/{id}', 'About\AboutController@deleteNepali');

        //Committee

        Route::get('committeeEnglish', 'Committee\CommitteeController@index');
        Route::get('committeeEnglish/create', 'Committee\CommitteeController@create');
        Route::post('committeeEnglish/store', 'Committee\CommitteeController@store');
        Route::get('committeeEnglish/edit/{id}', 'Committee\CommitteeController@edit');
        Route::put('committeeEnglish/update/{id}', 'Committee\CommitteeController@update');
        Route::get('committeeEnglish/delete/{id}', 'Committee\CommitteeController@delete');


        Route::get('committeeNepali', 'Committee\CommitteeController@indexNepali');
        Route::get('committeeNepali/create', 'Committee\CommitteeController@createNepali');
        Route::post('committeeNepali/store', 'Committee\CommitteeController@storeNepali');
        Route::get('committeeNepali/edit/{id}', 'Committee\CommitteeController@editNepali');
        Route::put('committeeNepali/update/{id}', 'Committee\CommitteeController@updateNepali');
        Route::get('committeeNepali/delete/{id}', 'Committee\CommitteeController@deleteNepali');

    });
});

