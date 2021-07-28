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

Route::prefix('programs')->group(function() {
    Route::group(['middleware' => ['loginCheck']], function () {
	//Route::get('course/ggg', 'CoursesController@course');
    	Route::get('/', 'CoursesController@programs');
    	Route::get('filter', 'CoursesController@programs');

    	Route::get('edit/{id}', 'CoursesController@programedit');

    	Route::get('modules/{id}', 'CoursesController@addmodules');
    	Route::get('electives/{id}', 'CoursesController@addelectives');


    	Route::post('modules/submit', 'CoursesController@submitmodules');
    	Route::post('electives/submit', 'CoursesController@submitectives');

    	Route::post('modules/edit', 'CoursesController@editmodules');
    	Route::post('electives/edit', 'CoursesController@editelectives');

    	Route::get('modules/delete/{id}', 'CoursesController@deletemodules');
    	Route::get('electives/delete/{id}', 'CoursesController@deleteelectives');


    	Route::get('add', function(){
    		return view('courses::backend.add');
    	});

    	Route::post('edit/submit/{id}','CoursesController@programeditsubmit');

    	Route::post('add/submit/','CoursesController@programaddsubmit');

	});

});


Route::get('courses', 'CoursesController@index');

Route::get('course/{slug}', 'CoursesController@course');
//Route::get('inquire', 'CoursesController@inquire');





