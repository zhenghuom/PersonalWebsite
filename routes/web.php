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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Home'],function (){
    Route::get('/','HomeController@index');
    Route::get('/skill','HomeController@skill');
    Route::get('/about','HomeController@about');
    Route::get('/portfolio','HomeController@portfolio');
    Route::get('/contact','HomeController@contact');
});
