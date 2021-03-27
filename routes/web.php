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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Financial Management
Route::get('/financialMgt', 'FinancialController@index');
Route::get('/netProfit', 'FinancialController@netProfit');
Route::get('/analyze', 'FinancialController@analyze');
Route::get('/reports', 'FinancialController@reports');

//PDF generator
Route::get('/getPDF', 'PDFController@getPDF');

//Testing Charts
Route::get('/testing', 'PagesController@test');
Route::get('my-chart', 'ChartController@index');

//Incomes
Route::resource('incomes', 'IncomeController');

//Expences
Route::resource('expences', 'ExpenceController');