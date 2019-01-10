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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/borrow')->group(function(){
    Route::get('/list/{cid}', 'HomeController@list')->name('borrow.list');

});

Route::prefix('/system')->group(function(){
    Route::get('/', 'SystemController@index')->name('system');
    Route::get('/category', 'SystemController@category')->name('system.category');
    Route::get('/item', 'SystemController@item')->name('system.item');
    Route::prefix('/create')->group(function(){
        Route::get('/category', 'SystemController@create_category')->name('system.create.category');
        Route::get('/item', 'SystemController@create_item')->name('system.create.item');
        Route::post('/category', 'SystemController@store_category')->name('system.store.category');
        Route::post('/item', 'SystemController@store_item')->name('system.store.item');
        Route::get('/member', 'SystemController@create_member')->name('system.create.member');
        Route::post('/member', 'SystemController@store_member')->name('system.store.member');
    });
    Route::get('/member', 'SystemController@member')->name('system.member');
    Route::prefix('/delete')->group(function(){
        Route::get('/item/{id}', 'SystemController@delete_member')->name('system.delete.member');
        Route::get('/category/{id}', 'SystemController@delete_category')->name('system.delete.category');
    });
});