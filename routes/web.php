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

<<<<<<< HEAD
=======
Route::get('/dashboard', function () {
    $programming_languages=DB::table('programming_languages')->get()
    return view('dashboard', compact('programming_language'));
});
>>>>>>> 02240a9b172accb48467b4eebdbf125d4083507b

Route::get('/dashboard', 'LanguagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
