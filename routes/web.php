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

/*Route::get('/', function () {    return view('welcome');});*/
Route::get('/', 'ImageController@index');
Route::get('/generate-pdf', 'ImageController@generatePDF');
Route::get('/1', 'ImageController@wrapper');
Route::get('/2', 'ImageController@LoadFile');
