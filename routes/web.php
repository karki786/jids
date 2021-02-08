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



Route::get('/system', ['as' => 'login', 'uses' => 'Admin\User\AuthController@login']);
Route::get('/system/login', ['as' => 'login', 'uses' => 'Admin\User\AuthController@login']);

Route::post('/system/login', ['as' => 'login-post', 'uses' => 'Admin\User\AuthController@authenticate']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\User\AuthController@logout']);

//change password
Route::get('user/change-password', ['as' => 'setting.change.password', 'uses' => 'Admin\User\AuthController@changePassword']);
Route::POST('user/update-password', ['as' => 'setting.update.password', 'uses' => 'Admin\User\AuthController@updatePassword']);

include ('backend.php');
include ('frontend.php');

