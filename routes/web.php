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

Route::get('/', 'frontend\IndexController@getIndex');
Route::get('/contact', 'frontend\IndexController@getContact');

Route::get('/job', 'frontend\jobController@getJob');
Route::get('/job/detail', 'frontend\jobController@getJobDetail');
Route::get('/job/candidate', 'frontend\jobController@getCandidate');
Route::get('/job/element', 'frontend\jobController@getElement');


