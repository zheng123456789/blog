<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function(){
	return view('admin.login');
});
//1 登录表单 
	Route::get("admin/login","Admin\LoginController@login");
//2 执行登录 
	Route::post("admin/dologin","Admin\LoginController@dologin");
//3 登录后台首页
	Route::get("admin/index","Admin\IndexController@index");
//4 执行退出
	Route::get("admin/logout","Admin\LoginController@logout");//执行退出 