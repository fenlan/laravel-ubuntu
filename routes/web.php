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

Route::get('/', function () {
    return view('welcome');
});

// test
Route::get('student', 'StudentController@test');

Route::group(['middleware' => ['activity']], function () {
    Route::any('activity1', 'StudentController@activity1');
    Route::any('activity2', 'StudentController@activity2');
});

Route::any('activity0', 'StudentController@activity0');
