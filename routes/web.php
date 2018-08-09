<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});
