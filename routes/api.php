<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function (){

    Route::get('/company', 'CompanyController@index')->name('company');
    Route::post('/company', 'CompanyController@store')->name('companyStore');
    Route::put('/company/{id}', 'CompanyController@update')->name('companyUpdate');
    Route::delete('/company/{id}', 'CompanyController@destroy')->name('companyDelete');

    Route::get('/user', 'UserController@index')->name('user');

});