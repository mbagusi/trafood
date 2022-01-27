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

Route::get('/', 'IndexController@show')->name('index.index');

Route::get('/food-banten', 'FoodBantenController@show')->name('food.bantenShow');

Route::get('/food-jabar', 'FoodJabarController@show')->name('food.jabarShow');

Route::get('/food-jateng', 'FoodJatengController@show')->name('food.jatengShow');

Route::get('/food-jatim', 'FoodJatimController@show')->name('food.jatimShow');

Route::get('/list-kategori', function () {
    return view('kategori.list-kategori');
});

Route::get('/detail-makanan', function () {
    return view('detail.detail-makanan');
});

Route::get('/login', function () {
    return view('login.login');
});
    
Route::get('/form-food-banten', 'FoodBantenController@index')->name('admin.form-banten')->middleware('login_auth');

Route::get('/form-food-jabar', 'FoodJabarController@index')->name('admin.form-jabar')->middleware('login_auth');

Route::get('/form-food-jateng', 'FoodJatengController@index')->name('admin.form-jateng')->middleware('login_auth');

Route::get('/form-food-jatim', 'FoodJatimController@index')->name('admin.form-jatim')->middleware('login_auth');


Route::get('/login', 'AdminController@index')->name('login.index');
Route::get('/logout', 'AdminController@logout')->name('login.logout');
Route::post('/login', 'AdminController@process')->name('login.process');

Route::get('/index', 'IndexAdminController@index')->name('admin.index')->middleware('login_auth');


Route::get('create-food-banten', 'FoodBantenController@create')->name('admin.create')->middleware('login_auth');
Route::post('/postbanten', 'FoodBantenController@store')->name('admin.storeBanten')->middleware('login_auth');
Route::get('/adminBanten/{id}/edit-food-banten', 'FoodBantenController@edit')->name('admin.editBanten')->middleware('login_auth');
Route::patch('/adminBanten/{id}', 'FoodBantenController@update')->name('admin.updateBanten')->middleware('login_auth');
Route::delete('/adminBanten/{id}', 'FoodBantenController@destroy')->name('admin.destroyBanten')->middleware('login_auth');

Route::get('create-food-jabar', 'FoodJabarController@create')->name('admin.create')->middleware('login_auth');
Route::post('/postjabar', 'FoodJabarController@store')->name('admin.storeJabar')->middleware('login_auth');
Route::get('/adminJabar/{id}/edit-food-jabar', 'FoodJabarController@edit')->name('admin.editJabar')->middleware('login_auth');
Route::patch('/adminJabar/{id}', 'FoodJabarController@update')->name('admin.updateJabar')->middleware('login_auth');
Route::delete('/adminJabar/{id}', 'FoodJabarController@destroy')->name('admin.destroyJabar')->middleware('login_auth');

Route::get('create-food-jateng', 'FoodJatengController@create')->middleware('login_auth');
Route::post('/postjateng', 'FoodJatengController@store')->name('admin.storeJateng')->middleware('login_auth');
Route::get('/adminJateng/{id}/edit-food-jateng', 'FoodJatengController@edit')->name('admin.editJateng')->middleware('login_auth');
Route::patch('/adminJateng/{id}', 'FoodJatengController@update')->name('admin.updateJateng')->middleware('login_auth');
Route::delete('/adminJateng/{id}', 'FoodJatengController@destroy')->name('admin.destroyJateng')->middleware('login_auth');

Route::get('create-food-jatim', 'FoodJatimController@create')->middleware('login_auth');
Route::post('/postjatim', 'FoodJatimController@store')->name('admin.storeJatim')->middleware('login_auth');
Route::get('/adminJatim/{id}/edit-food-jatim', 'FoodJatimController@edit')->name('admin.editJatim')->middleware('login_auth');
Route::patch('/adminJatim/{id}', 'FoodJatimController@update')->name('admin.updateJatim')->middleware('login_auth');
Route::delete('/adminJatim/{id}', 'FoodJatimController@destroy')->name('admin.destroyJatim')->middleware('login_auth');



Route::get('/adminJabar', 'FoodJabarController@index')
->name('admin.indexJabar')->middleware('login_auth');

Route::get('/adminBanten', 'FoodBantenController@index')
->name('admin.indexBanten')->middleware('login_auth');

Route::get('/adminJateng', 'FoodJatengController@index')
->name('admin.indexJateng')->middleware('login_auth');

Route::get('/adminJatim', 'FoodJatimController@index')
->name('admin.indexJatim')->middleware('login_auth');


