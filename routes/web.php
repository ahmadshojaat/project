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

Route::get('/',"homeController@add_form" )->name("home");
Route::post('/submit',"homeController@product_submit" )->name("product_submit");
Route::post('/upload', 'homeController@ck_file_uploader')->name('upload');
Route::get('/list/{page}', 'homeController@product_list')->name('product_list');
Route::get('/edit/{id}', 'homeController@product_edit')->name('product_edit');


