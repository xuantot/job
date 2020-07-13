<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

// ---Frontend
Route::group(['prefix' => ''], function () {

    Route::get('/', 'frontend\IndexController@getIndex');
    Route::get('/contact', 'frontend\IndexController@getContact');

    Route::get('/login', 'frontend\loginController@getLogin');
    Route::get('/newaccount', 'frontend\loginController@getAccount');

    Route::group(['prefix' => 'job'], function () {
        Route::get('/', 'frontend\jobController@getJob');
        Route::get('/detail', 'frontend\jobController@getJobDetail');
        Route::get('/candidate', 'frontend\jobController@getCandidate'); 
    });
});


// ---Backend
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'backend\IndexController@getIndex');

    Route::get('/login', 'backend\LoginController@getLogin');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'backend\categoryController@getCategory');
        Route::get('/edit', 'backend\categoryController@getEditCategory');
    });

    Route::group(['prefix' => 'job'], function () {
        Route::get('/', 'backend\jobController@getJob');
        Route::get('/edit', 'backend\jobController@getEditJob');
        Route::get('/add', 'backend\jobController@getAddJob');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'backend\userController@getUser');
        Route::post('/', 'backend\userController@postUser');
        Route::get('/add', 'backend\userController@getAddUser');
        Route::post('/add', 'backend\userController@postAddUser');
        
        Route::get('/edit/{id}', 'backend\userController@getEditUser');
        Route::post('/edit/{id}', 'backend\userController@postEditUser');

        Route::get('/delete/{id}', 'backend\userController@deleteUser');

        Route::get('/info', 'backend\userController@getInfoUser');

        Route::get('/client', 'backend\userController@getUserClient');
        Route::get('/client/delete/{id}', 'backend\userController@deleteClient');
        Route::get('/candidate', 'backend\userController@getUserCandidate');
        Route::get('/candidate/delete/{id}', 'backend\userController@deleteCandidate');
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'backend\OrderController@getOrder');
        Route::get('/detail', 'backend\OrderController@getDetailOrder');
        Route::get('/processed', 'backend\OrderController@getProcessedOrder');
    });
});



// CMS

Route::group(['prefix' => 'company/cms'], function () {

    Route::get('/', 'cms\cmsController@getCms');

    Route::get('/account', 'cms\cmsController@getAccount');

    Route::group(['prefix' => 'job'], function () {
        Route::get('/', 'cms\cmsJobController@getCmsJob');
        Route::get('/add', 'cms\cmsJobController@getCmsJobAdd');
        Route::get('/edit', 'cms\cmsJobController@getCmsJobEdit');
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'cms\cmsOrderController@getCmsOrder');
        Route::get('/processed', 'cms\cmsOrderController@getCmsOrderProcessed');
    });

});









