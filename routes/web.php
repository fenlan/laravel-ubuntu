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

// test 路由
Route::get('basic1', function () {
    return 'Hello World';
});

// test　路由参数
Route::get('user/{id}', function ($id) {
    return 'User-id-' . $id;
});

// test
Route::get('user/{name?}', function ($name = 'fenlan') {
    return 'User-name-' . $name;
})->where('name', '[A-Za-z]+');

// test 路由群组
Route::group(['prefix' => 'member'], function () {
    Route::get('user/member-center', ['as' => 'center', function () {
        return route('center');
    }]);
    Route::any('multy1', function () {
        return 'member-multy1';
    });
});
