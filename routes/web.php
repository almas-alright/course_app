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


Route::get('/', function(){
	return view('front.views.home');
});
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('c-admin/home', 'Admin\TestController@index')->name('abcd.home');
Route::any('c-admin/users', 'Admin\AdminUserController@getAll')->name('abcd.users');

Route::get('c-admin/editor', 'Admin\EditorController@index');

Route::get('c-admin/training', 'Admin\TestController@trainings')->name('abcd.trainingz');
Route::any('c-admin/trainings', 'Admin\AdminTrainingController@getAll')->name('abcd.training');
Route::any('c-admin/add-training', 'Admin\AdminTrainingController@create')->name('abcd.trainingadd');



Route::get('c-admin', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('c-admin', 'Admin\AdminLoginController@login');
Route::post('admin-password/email', 'Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\AdminResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');