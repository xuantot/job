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
    Route::group(['prefix' => 'login'], function () {
        Route::get('', 'backend\LoginController@getLogin');
        Route::post('', 'backend\LoginController@login');
        Route::get('registration','backend\LoginController@showRegistration');
        Route::post('registration','backend\LoginController@registration');
    });

    Route::group(['middleware'=>'guest'], function () {
        Route::get('/', 'backend\IndexController@getIndex');
        Route::post('logout', 'backend\LoginController@logout');
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
            Route::get('/add', 'backend\userController@getAddUser');
            Route::get('/edit', 'backend\userController@getEditUser');
            Route::get('/info', 'backend\userController@getInfoUser');

            Route::get('/company', 'backend\userController@getUserCompany');
            Route::get('/candidate', 'backend\userController@getUserCandidate');
        });

        Route::group(['prefix' => 'order'], function () {
            Route::get('/', 'backend\OrderController@getOrder');
            Route::get('/detail', 'backend\OrderController@getDetailOrder');
            Route::get('/processed', 'backend\OrderController@getProcessedOrder');
        });
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










//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
