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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'isInstalledCheck']
    ],
    function()
    {

        Route::get('switch-language/{code}', 'GlobalController@switchLanguage')->name('switch-language');
        Route::get('select-image/{media_id}/{tableName}/{model_id}', 'GlobalController@selectImage')->name('select-image');

        Route::get('/dashboard', 'CommonController@index')->name('dashboard')->middleware('loginCheck');
            Route::prefix('common')->group(function() {

                //global controller
                Route::delete('/delete', 'GlobalController@postDelete')->name('delete');
                Route::get('/edit-info/{page_name}/{param1?}/{param2?}/{param3?}', 'GlobalController@editInfo')->name('edit-info')->where('param1', '(.*)');

        });

    });

    Route::get('verification/v.1/re-captcha', function(){
        return view('common::re-captcha');
    });

    Route::post('verfication/inquire-submit', 'CommonController@inquire');

    Route::get('inquire', function(){
    return view('courses::inquire');
    });

    Route::get('application', function(){
    return view('common::application');
    });

    Route::post('application/submit', 'CommonController@application');

    Route::get('study-abroad', 'CommonController@studyabroad');
