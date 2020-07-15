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
});












//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
