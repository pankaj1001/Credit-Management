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

Route::get('/', function () {
    return view('home');
});
Route::get('users/', 'UserController@showAllUsers');
Route::get('users/{id}', 'UserController@showUser');
Route::get('users/{id}/transfer', 'UserController@transfer');
Route::get('users/{id}/transfer/{id_to}', 'UserController@sendCreditView');
Route::post('users/{id}/transfer/{id_to}', 'UserController@sendCredit');