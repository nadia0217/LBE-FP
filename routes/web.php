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

Route::group(['prefix' => 'items', 'middleware' => 'onlyAdmin'], function () {
    Route::get('/create', 'HandphoneController@displayCreateItemPage')->name('items.create');
    Route::post('/create', 'HandphoneController@createItem')->name('items.createpost');

    Route::get('/edit/{id}', 'HandphoneController@displayEditItemPage')->name('items.edit');
    Route::put('/edit/{id}', 'HandphoneController@editItem')->name('items.editput');

    Route::get('/delete/{id}', 'HandphoneController@displaydeleteItemPage')->name('items.deletepage');
    Route::delete('/delete/{id}', 'HandphoneController@deleteItem')->name('items.delete');

    Route::get('/{id}', 'HandphoneController@showItem')->name('items.show');
});

Route::group(['middleware' => 'onlyUser'], function () {
    Route::get('/user/index', 'HandphoneController@userDashboard')->name('user.index');
    Route::get('/{id}', 'HandphoneController@userShowItem')->name('user.show');
});

Route::get('/admin/index', 'HandphoneController@adminDashboard')->middleware('onlyAdmin')->name('admin.index');

Route::get('/notfound', 'HomeController@NotFoundPage')->name('notfound');