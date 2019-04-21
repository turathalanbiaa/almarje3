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

Route::get('/', 'MainController@index')
    ->name('index')
    ->middleware('login');

Route::post('store', 'mainController@store')
    ->name('store');

Route::POST('/update', 'MainController@updateCategory')
    ->name('updateCategory')
    ->middleware('login');

Route::POST('/destroy_category', 'MainController@destroyCategory')
    ->name('destroyCategory')
    ->middleware('login');

Route::get('/subjects/{id}', 'MainController@viewCategoriesOrContents')
    ->name('viewCategories')
    ->middleware('login');

Route::get('/create_content/{id}', 'MainController@createContent')
    ->name('createContent')
    ->middleware('login');

Route::post('/store_content', 'MainController@storeContent')
    ->name('storeContent')
    ->middleware('login');

Route::get('/edit_content/{id}', 'MainController@editContent')
    ->name('editContent')
    ->middleware('login');

Route::post('/update_content', 'MainController@updateContent')
    ->name('updateContent')
    ->middleware('login');

Route::post('/destroy_content', 'MainController@destroyContent')
    ->name('destroyContent')
    ->middleware('login');

Route::get('/login_form', 'MainController@loginForm')
    ->name('loginForm');

Route::post('/login', 'MainController@login')
    ->name('login');

Route::get('/show_content/{id}', 'MainController@showContent')
    ->name('showContent')
    ->middleware('login');




Route::get('test/{id}', 'MainController@testview');


@include("api.php");