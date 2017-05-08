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


Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'HomeController@contact')->name('home.contact');

Route::get('/training', 'TrainingController@index')->name('training.index-home');
Route::get('/training/{training}', 'TrainingController@show')->name('training.show-home');

// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Auth::routes();



Route::get('c-admin/home', 'Admin\TestController@index')->name('abcd.home');
Route::any('c-admin/users', 'Admin\AdminUserController@getAll')->name('abcd.users');

Route::get('c-admin/editor', 'Admin\EditorController@index');


Route::resource('c-admin/training', 'Admin\AdminTrainingController');
Route::resource('c-admin/post', 'Admin\AdminPostController');

Route::any('c-admin/posts', 'Admin\AdminPostController@getAll')->name('abcd.post');
Route::any('c-admin/trainings', 'Admin\AdminTrainingController@getAll')->name('abcd.training');


Route::get('c-admin', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('c-admin', 'Admin\AdminLoginController@login');
Route::post('admin-password/email', 'Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\AdminResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');