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

// Route::prefix('site')->group(function() {
//     Route::get('/', 'SiteController@index');
// });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'isInstalledCheck']
    ],
    function () {

    // Route::prefix('admin/page')->group(function() {
    //     Route::group(['middleware' => ['loginCheck']], function () {
    //         Route::group(['middleware' => ['XSS']], function () {

    //             Route::get('/', 'PageController@index')->name('pages')->middleware('permissionCheck:pages_read');
               
            
    //     });
    // });

        //Route::get('/', 'HomeController@home')->name('home');
        Route::get('/', 'SiteController@index')->name('home');
    	//Route::post('search-home', 'SiteController@searchhome');

        Route::get('Undergraduate-Programmes-in-Business', 'SiteController@upib');
        Route::get('Diplomas-&-Undergraduate-Programmes-Psychology', 'SiteController@dupp');

        Route::get('news', 'SiteController@news');
        Route::get('events', function(){
            return view('site::events');
        });

        Route::get('about-CIIHE', function(){
            return view('site::about');
        });

        Route::get('contactus', function(){
            return view('site::contactus');
        });

        Route::post('contactus/submit', 'SiteController@submit');

        Route::get('students-life', 'SiteController@studentslife');
        Route::get('international', 'SiteController@international');
        Route::get('alumni', 'SiteController@alumni');


});
