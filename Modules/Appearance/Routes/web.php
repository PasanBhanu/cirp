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

Route::prefix('appearance')->group(function () {
        Route::group(['middleware' => ['loginCheck']], function () {


                //                 //sections
                route::get('sections', 'ThemeSectionController@sections')->name('sections');

                route::post('save/section', 'ThemeSectionController@saveNewSection')->name('save-new-section');

                route::get('edit/theme/section/{id}', 'ThemeSectionController@editThemeSection')->name('edit-theme-section');


                route::post('update/theme/section', 'ThemeSectionController@updateThemeSection')->name('update-theme-section');

                route::post('update-section-order', 'ThemeSectionController@updateSectionOrder')->name('update-section-order');

                route::post('join-before-update', 'ThemeController@joinbeforeupdate')->name('join-before-update');

                route::post('add-slide', 'ThemeController@addNewSlide')->name('add-slide');

                route::post('delete-slide', 'ThemeController@deleteSlide')->name('delete-slide');

                route::post('intakes-update', 'ThemeController@intakeupdate')->name('intakes-update');

                route::post('update-tile', 'ThemeController@updateTile')->name('update-tile');

                route::post('change-media', 'ThemeController@updateMedia')->name('change-media');

                route::post('change-video', 'ThemeController@changeVideo')->name('change-video');

                route::post('add-logo', 'ThemeController@addLogo')->name('add-logo');

                route::post('delete-logo', 'ThemeController@deleteLogo')->name('delete-logo');
        });
});
