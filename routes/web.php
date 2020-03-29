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
//! this route  id used to get the role of the user and redirect him appropriately to the respective page.
Route::get('/', function () {

    return view('extending.landingPage');
    // return auth()->user()->id ;;

});

Route::get('/supportLanding/','firstLineSupport\firstLineSupportController@firstLineSupportController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/reportBug','ReportBug\ReportBug@reportBug');

//! this route is used to post the bug report
Route::post('/postingBug','ReportBug\reportBug@postingBugReport');

//! this route is used to get the details of a bug that has been reported.
Route::get('/singleBugReport/{id}','ReportBug\reportBug@singleBug');

//! th
Route::get('/allReportedBugs','ReportBug\reportBug@allReportedBugsByClient');

//this route is used to get the grouped rotes that will require authentication.

// Route::group(['middleware' => ['auth']], function() {

//     Route::resource('roles','RoleController');

//     Route::resource('users','UserController');

//     // Route::resource('products','ProductController');

// });
