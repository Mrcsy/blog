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
    return view('welcome');
});

//后台登录路由
Route::get('admin/login','Admin\LoginController@login');
//验证码路由
Route::get('admin/code','Admin\LoginController@code');
//处理后台登录的路由
Route::any('admin/dologin','Admin\LoginController@dologin');
//登录首页路由
Route::any('admin/index','Admin\LoginController@index');
//加密算法
Route::any('admin/jiami','Admin\LoginController@jiami');
//后台欢迎页
Route::any('admin/welcome','Admin\LoginController@welcome');
