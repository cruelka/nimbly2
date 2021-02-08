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
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/post', 'api\PostController');
    Route::resource('/user', 'api\UserController');
    Route::resource('/profile', 'api\ProfileController');
    Route::get('/logout', 'api\UserController@logout');
 
});

Route::post('/login', 'api\UserController@login')->name('login');
Route::get('/facebook-login', 'api\UserController@facebookLogin')->name('facebook-login');
