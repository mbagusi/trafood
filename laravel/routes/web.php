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

Route::get('/', function () {
    return view('index.index');
});

Route::get('/food-banten', function () {
    return view('food.food-banten');
});

Route::get('/food-jateng', function () {
    return view('food.food-jateng');
});

Route::get('/food-jatim', function () {
    return view('food.food-jatim');
});

Route::get('/food-jabar', function () {
    return view('food.food-jabar');
});

Route::get('/list-kategori', function () {
    return view('kategori.list-kategori');
});

Route::get('/detail-makanan', function () {
    return view('detail.detail-makanan');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/form-food-banten', 'FoodBantenController@index')->name('admin.form-banten');

Route::get('/form-food-jabar', 'FoodJabarController@index')->name('admin.form-jabar');

Route::get('/form-food-jateng', 'FoodJatengController@index')->name('admin.form-jateng');

Route::get('/form-food-jatim', 'FoodJatimController@index')->name('admin.form-jatim');


Route::get('/login', 'AdminController@index')->name('login.index');
Route::get('/logout', 'AdminController@logout')->name('login.logout');
Route::post('/login', 'AdminController@process')->name('login.process');

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('create-food-jabar', 'FoodJabarController@create')->name('admin.create');
Route::post('/postjabar', 'FoodJabarController@store')->name('admin.storeJabar');

Route::get('create-food-banten', 'FoodBantenController@create')->name('admin.create');
Route::post('/postbanten', 'FoodBantenController@store')->name('admin.storeBanten');

Route::get('create-food-jateng', 'FoodJatengController@create')->name('admin.create');
Route::post('/postjateng', 'FoodJatengController@store')->name('admin.storeJateng');

Route::get('create-food-jatim', 'FoodJatimController@create')->name('admin.create');
Route::post('/postjatim', 'FoodJatimController@store')->name('admin.storeJatim');


Route::get('/admin', 'FoodJabarController@index')
->name('admin.index');

Route::get('/admin', 'FoodBantenController@index')
->name('admin.index');

Route::get('/admin/{admin}/edit-food-banten', 'FoodBantenController@edit')
->name('admin.edit');