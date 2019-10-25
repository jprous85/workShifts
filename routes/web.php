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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/company', 'CompanyController@view')->name('company');
    Route::get('/service', 'ServiceController@view')->name('service');
    Route::get('/shedule', 'SheduleController@view')->name('shedule');
    Route::get('/workplace', 'WorkplaceController@view')->name('workplace');
});
