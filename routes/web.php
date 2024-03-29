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

app()->setLocale('ar');

use Modules\User\Entities\User;

Route::get('/', function () {

	$users = [];

	if (request('search')) {

		$users = User::where('full_name', 'like', '%' . request('search') . '%')->orWhere('full_name', 'like', '%' . request('search') . '%')->paginate(10);

	}

	return view('index', compact('users'));
});