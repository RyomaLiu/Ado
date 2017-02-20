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

Route::get("/","UserController@welcome");

Route::get("/login", "UserController@login");
Route::post("/login/do","UserController@login_do");

Route::get("/regist", "UserController@regist");
Route::post("/regist/do", "UserController@regist_do");

