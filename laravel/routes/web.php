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


Route::get('create-food-banten', 'FoodBantenController@create')->name('admin.create');
Route::post('/postbanten', 'FoodBantenController@store')->name('admin.storeBanten');
Route::get('/adminBanten/{id}/edit-food-banten', 'FoodBantenController@edit')->name('admin.editBanten');
Route::patch('/adminBanten/{id}', 'FoodBantenController@update')->name('admin.updateBanten');
Route::delete('/adminBanten/{id}', 'FoodBantenController@destroy')->name('admin.destroyBanten');

Route::get('create-food-jabar', 'FoodJabarController@create')->name('admin.create');
Route::post('/postjabar', 'FoodJabarController@store')->name('admin.storeJabar');
Route::get('/adminJabar/{id}/edit-food-jabar', 'FoodJabarController@edit')->name('admin.editJabar');
Route::patch('/adminJabar/{id}', 'FoodJabarController@update')->name('admin.updateJabar');
Route::delete('/adminJabar/{id}', 'FoodJabarController@destroy')->name('admin.destroyJabar');

Route::get('create-food-jateng', 'FoodJatengController@create')->name('admin.create');
Route::post('/postjateng', 'FoodJatengController@store')->name('admin.storeJateng');
Route::get('/adminJateng/{id}/edit-food-jateng', 'FoodJatengController@edit')->name('admin.editJateng');
Route::patch('/adminJateng/{id}', 'FoodJatengController@update')->name('admin.updateJateng');
Route::delete('/adminJateng/{id}', 'FoodJatengController@destroy')->name('admin.destroyJateng');

Route::get('create-food-jatim', 'FoodJatimController@create')->name('admin.create');
Route::post('/postjatim', 'FoodJatimController@store')->name('admin.storeJatim');
Route::get('/adminJatim/{id}/edit-food-jatim', 'FoodJatimController@edit')->name('admin.editJatim');
Route::patch('/adminJatim/{id}', 'FoodJatimController@update')->name('admin.updateJatim');
Route::delete('/adminJatim/{id}', 'FoodJatimController@destroy')->name('admin.destroyJatim');



Route::get('/adminJabar', 'FoodJabarController@index')
->name('admin.indexJabar');

Route::get('/adminBanten', 'FoodBantenController@index')
->name('admin.indexBanten');

Route::get('/adminJateng', 'FoodJatengController@index')
->name('admin.indexJateng');

Route::get('/adminJatim', 'FoodJatimController@index')
->name('admin.indexJatim');


