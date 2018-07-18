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

Route::get('/', 'Controller@index')->name('index');


Route::group(['prefix' => 'admin'], function () {
   Voyager::routes();
});

Auth::routes();
Route::post('CreatAn/store','CreatController@store')->name('CreatAn/store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subcat/{catId}', 'SubCatController@index')->name('subcat');
ROute::get('/creat','CreatController@indexx')->name('creat');
Route::post('creat', ['as'=>'creat','uses'=>'CreatController@indexx']);
Route::get('/details/{annId}', 'DetailsController@details')->name('details');
Route::get('/subcatshow/{catid}/{subcatid}', 'SubCatController@show')->name('subcatshow');

