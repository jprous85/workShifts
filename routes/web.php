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
    Route::get('/company', 'CompanyController@index')->name('company');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/shedule', 'SheduleController@index')->name('shedule');
    Route::get('/workplace', 'WorkplaceController@index')->name('workplace');
});
