<?php


use Illuminate\Support\Facades\Route;

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

Route::resource('', 'MainController')->middleware('login');
Route::POST('/update', 'MainController@updateCategory')->name('updateCategory');
Route::POST('/delete', 'MainController@destroyCategory')->name('destroyCategory');
Route::get('/subjects/{id}', 'MainController@viewCategoriesOrContents')->name('viewCategories');
Route::get('/create_content/{id}', 'MainController@createContent')->name('createContent');
Route::post('/store_content', 'MainController@storeContent')->name('storeContent');
Route::get('/edit_content/{id}', 'MainController@editContent')->name('editContent');
Route::post('/update_content', 'MainController@updateContent')->name('updateContent');
Route::get('/login_form', 'MainController@loginForm')->name('loginForm');
Route::post('/login', 'MainController@login')->name('login');

