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

    Route::prefix('admin')->middleware('admin')->group(function () {

        // Level One Routes
        Route::resource('level_ones','LevelOneController');
        Route::delete('/delete/all/level/one','LevelOneController@delete_all')->name('delete_level_one');

        // Level Two Routes
        Route::resource('level_twos','LevelTwoController');
        Route::delete('/delete/all/level/two','LevelTwoController@delete_all')->name('delete_level_two');

        // Level Three Routes
        Route::resource('level_threes','LevelThreeController');
        Route::delete('/delete/all/level/three','LevelThreeController@delete_all')->name('delete_level_three');

        // Level Four Routes
        Route::resource('level_fours','LevelFourController');
        Route::delete('/delete/all/level/four','LevelFourController@delete_all')->name('delete_level_four');

        // Level Five Routes
        Route::resource('level_fives','LevelFiveController');
        Route::delete('/delete/all/level/five','LevelFiveController@delete_all')->name('delete_level_five');

        // Level Six Routes
        Route::resource('level_sixs','LevelSixController');
        Route::delete('/delete/all/level/six','LevelSixController@delete_all')->name('delete_level_six');

        // Level Seven Routes
        Route::resource('level_sevens','LevelSevenController');
        Route::delete('/delete/all/level/seven','LevelSevenController@delete_all')->name('delete_level_seven');

        // Level Eight Routes
        Route::resource('level_eights','LevelEightController');
        Route::delete('/delete/all/level/eight','LevelEightController@delete_all')->name('delete_level_eight');

        // Level Nine Routes
        Route::resource('level_nines','LevelNineController');
        Route::delete('/delete/all/level/nine','LevelNineController@delete_all')->name('delete_level_nine');
    });
});