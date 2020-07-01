<?php

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
Route::get('/', 'frontend\IndexController@getIndex');
Route::get('/contact', 'frontend\IndexController@getContact');

Route::get('/login', 'frontend\IndexController@getLogin');

Route::get('/job', 'frontend\jobController@getJob');
Route::get('/job/detail', 'frontend\jobController@getJobDetail');
Route::get('/job/candidate', 'frontend\jobController@getCandidate');




// ---Backend
Route::get('/admin', 'backend\IndexController@getIndex');

Route::get('/admin/login', 'backend\LoginController@getLogin');

Route::get('/admin/category', 'backend\categoryController@getCategory');
Route::get('/admin/category/edit', 'backend\categoryController@getEditCategory');

Route::get('/admin/job', 'backend\jobController@getJob');
Route::get('/admin/job/edit', 'backend\jobController@getEditJob');
Route::get('/admin/job/add', 'backend\jobController@getAddJob');

Route::get('/admin/user', 'backend\userController@getUser');
Route::get('/admin/user/add', 'backend\userController@getAddUser');
Route::get('/admin/user/edit', 'backend\userController@getEditUser');
Route::get('/admin/user/info', 'backend\userController@getInfoUser');


Route::get('/admin/user/company', 'backend\userController@getUserCompany');
Route::get('/admin/user/candidate', 'backend\userController@getUserCandidate');

Route::get('/admin/order', 'backend\OrderController@getOrder');
Route::get('/admin/order/detail', 'backend\OrderController@getDetailOrder');
Route::get('/admin/order/processed', 'backend\OrderController@getProcessedOrder');


// CMS
Route::get('/company/cms', 'cms\cmsController@getCms');

Route::get('/company/cms/job', 'cms\cmsJobController@getCmsJob');
Route::get('/company/cms/job/add', 'cms\cmsJobController@getCmsJobAdd');
Route::get('/company/cms/job/edit', 'cms\cmsJobController@getCmsJobEdit');

Route::get('/company/cms/category', 'cms\cmsCategoryController@getCmsCategory');
Route::get('/company/cms/category/edit', 'cms\cmsCategoryController@getCmsCategoryEdit');

Route::get('/company/cms/order', 'cms\cmsOrderController@getCmsOrder');
Route::get('/company/cms/order/processed', 'cms\cmsOrderController@getCmsOrderProcessed');












