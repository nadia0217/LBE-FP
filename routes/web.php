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
})->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/index', 'HomeController@dashboardAdmin')->middleware('onlyAdmin');

Route::get('/user/index', 'HomeController@dashboardUser')->middleware('onlyUser');

Route::get('/notfound', 'HomeController@NotFoundPage')->name('notfound');