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
        Route::post('', 'backend\categoryController@postCategory');
        Route::post('remove', 'backend\categoryController@deleteCategory');
        Route::get('/edit/{id}', 'backend\categoryController@getEditCategory');
        Route::put('/{id}', 'backend\categoryController@updateCategory');
    });

    Route::group(['prefix' => 'company'], function () {
        Route::get('/', 'backend\companyController@getCompany');
        Route::post('/', 'backend\companyController@postCompany');
        Route::get('/edit/{id}', 'backend\companyController@getEditCompany');
        Route::post('/edit/{id}', 'backend\companyController@postEditCompany');

        Route::get('/delete/{id}', 'backend\companyController@getDeleteCompany');
    });

    Route::group(['prefix' => 'job'], function () {
        Route::get('/', 'backend\jobController@getJob');

        Route::get('/edit/{id}', 'backend\jobController@getEditJob');
        Route::post('/edit/{id}', 'backend\jobController@postEditJob');

        Route::get('/add', 'backend\jobController@getAddJob');
        Route::post('/add', 'backend\jobController@postAddJob');

        Route::get('/delete/{id}', 'backend\jobController@getDeleteJob');        
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









