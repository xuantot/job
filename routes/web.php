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

// Route::get('/job/element', 'frontend\jobController@getElement');



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

Route::get('/admin/user/client', 'backend\userController@getUserClient');

Route::get('/admin/order', 'backend\OrderController@getOrder');
Route::get('/admin/order/detail', 'backend\OrderController@getDetailOrder');
Route::get('/admin/order/processed', 'backend\OrderController@getProcessedOrder');


// CMS
Route::get('/job/cms', 'cms\cmsController@getcms');









