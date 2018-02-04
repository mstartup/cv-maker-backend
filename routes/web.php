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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('educations', 'EducationController@index');

Route::post('libraries', 'LibrariesController@index');

Route::post('programing_languages', 'ProgrammingLanguagesController@index');

Route::post('roles', 'RolesController@index');

Route::post('permissions', 'PermissionsController@index');