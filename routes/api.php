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

Route::post('authenticate', 'Auth\LoginController@authenticate');

Route::post('register', 'Auth\RegisterController@register');

Route::resource('/user', 'Api\UserController', ['except' => ['create', 'edit']]);

Route::resource('/post', 'Api\PostController', ['except' => ['create', 'edit']]);

Route::resource('/friend', 'Api\FriendController', ['except' => ['create', 'edit']]);
