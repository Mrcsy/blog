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
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录路由
    Route::get('login','LoginController@login');
    //验证码路由
    Route::get('code','LoginController@code');
    //加密算法
    Route::any('jiami','LoginController@jiami');
    //处理后台登录的路由
    Route::any('dologin','LoginController@dologin');
});




Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'isLogin'],function(){
    //登录首页路由
    Route::any('index','LoginController@index');
    //后台欢迎页
    Route::any('welcome','LoginController@welcome');
    //后台退出登录路由
    Route::any('logout','LoginController@logout');

    //后台用户模块相关路由
    Route::resource('user','UserController');
    //添加用户模块
    Route::resource('create','UserController');
});


