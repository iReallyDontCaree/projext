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

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/roles', 'RoleController',['except' => 'destroy']);
  Route::resource('/permissions', 'PermissionController',['except' => 'destroy']);
  Route::resource('/prisons', 'PrisonController',['except' => 'destroy']);
  Route::resource('/rehab', 'RehabController',['except' => 'destroy']);
  Route::resource('/jobs', 'JobController',['except' => 'destroy']);

});

Route::get('/home', 'HomeController@index')->name('home');
