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
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function() {

    Route::prefix('admin')->group(function () {


        Route::group(['middleware' => 'admin:admin'], function () {

            Route::get('/', 'AdminPanelController@index')->name('admin.dashboard');


        });


    });
});
