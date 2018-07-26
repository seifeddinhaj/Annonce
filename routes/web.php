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

Route::post('deleteCat','CategoriesController@destroy');
Route::post('CreatCat','CategoriesController@store');
Route::post('deleteSubCat','subCategoriesController@destroy');
Route::post('CreateSubCat','subCategoriesController@store');


Route::get('creat/ajax/{id}',array('as'=>'myform.ajax','uses'=>'CreatController@myformAjax'));

Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'CreatController@myformAjax'));


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subcat/{catId}', 'SubCatController@index')->name('subcat');
ROute::get('/creat','CreatController@indexx')->name('creat');
Route::post('creat', ['as'=>'creat','uses'=>'CreatController@indexx']);
Route::get('/details/{annId}', 'DetailsController@details')->name('details');
Route::get('/subcatshow/{catid}/{subcatid}', 'SubCatController@show')->name('subcatshow');
Route::post('/search','searchController@show')->name('search');
ROute::get('/myads','myadsController@index')->name('myads');
Route::get('/myads/remove/{id}','myadsController@destroy')->name('myads');
ROute::post('myads/edit','myadsController@update')->name('myads');
Route::get('administrateur','AdminController@index');
Route::get('categories','CategoriesController@index');

ROute::get('subcategories','subCategoriesController@index');



